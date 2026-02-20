<?php

namespace App\Services\Dashboard;

use Illuminate\Http\Response;
use App\{
    Traits\GlobalTrait
};
use App\Models\{
    Doctor,
    HMO,
    Log,
    Specialty
};

class DashboardService
{
    use GlobalTrait;

    private $queryRows = 10;


    public function index(object $request): Response
    {
        $page = 1;
        if ($request->has('page')) {
            $page = $request->page;
        }
        $records = [];

        $records['logs'] = Log::orderBy('created_at', 'DESC')
            ->orderBy('updated_at', 'DESC')
            ->with(['user' => function ($q) {
                $q->with(['images', 'userDetail']);
            }])
            ->paginate($this->queryRows);
        return response([
            'records' => $records['logs']
        ]);
    }

    public function smartSearch($request): Response
    {

        $query = $request->inputQuery;

        $doctors = Doctor::where(function ($q) use ($query) {
            $q->where('first_name', 'LIKE', '%' . $query . '%')
                ->orWhere('middle_name', 'LIKE', '%' . $query . '%')
                ->orWhere('last_name', 'LIKE', '%' . $query . '%')
                ->orWhereRaw("CONCAT(first_name, ' ', middle_name, ' ', last_name) LIKE ?", ['%' . $query . '%'])
                ->orWhereRaw("CONCAT(first_name, ' ', last_name) LIKE ?", ['%' . $query . '%']);
        })
            ->where('enabled', 1)
            ->with(['images'])
            ->get();

        $specialties = Specialty::where('name', 'LIKE', '%' . $query . '%')
            ->get();

        $hmos = HMO::where('name', 'LIKE', '%' . $query . '%')
            ->where('enabled', 1)
            ->get();

        $records = collect(['doctors' => $doctors, 'specialties' => $specialties, 'accepts', $hmos]);

        return response([
            'records' => $records
        ]);
    }

    public function smartSearchFilter($request): Response
    {

        $query = $request->searchQuery;
        $filters = json_decode($request->draftFilters, true);

        $doctors = Doctor::where('enabled', 1)
            ->where(function ($q) use ($query) {
                $q->where(function ($sub) use ($query) {
                    $sub->where('first_name', 'LIKE', '%' . $query . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $query . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $query . '%')
                        ->orWhereRaw("CONCAT(first_name, ' ', middle_name, ' ', last_name) LIKE ?", ['%' . $query . '%'])
                        ->orWhereRaw("CONCAT(first_name, ' ', last_name) LIKE ?", ['%' . $query . '%']);
                })
                    ->orWhereHas('specialties', function ($sub) use ($query) {
                        $sub->where('name', 'LIKE', '%' . $query . '%');
                    });
            })
            ->with(['specialties', 'hmos', 'internationalInsurances', 'images'])
            ->when(!empty($filters['specialty']), function ($q) use ($filters) {
                $q->whereHas('specialties', function ($sub) use ($filters) {
                    $sub->where('name', $filters['specialty']);
                });
            })
            ->when(!empty($filters['consultation']), function ($q) use ($filters) {
                $column = $filters['consultation'];

                $validColumns = ['by_appointment', 'walk_in', 'teleconsult'];

                if (in_array($column, $validColumns)) {
                    $q->where($column, 1);
                }
            })
            ->when(!empty($filters['hmo']), function ($q) use ($filters) {
                $q->whereHas('hmos', function ($sub) use ($filters) {
                    $sub->where('name', $filters['hmo']);
                });
            })
            ->when(!empty($filters['location']), function ($q) use ($filters) {
                $q->whereHas('availabilities.location', function ($sub) use ($filters) {
                    $sub->where('name', 'LIKE', '%' . $filters['location'] . '%');
                });
            })
            ->when(!empty($filters['accepts']), function ($q) use ($filters) {
                $acceptColumns = [
                    'international_insurance' => 'accept_international_insurance',
                    'corporate_sales' => 'accept_corporate_sales',
                ];

                $q->where(function ($subQuery) use ($filters, $acceptColumns) {
                    foreach ($filters['accepts'] as $value) {
                        if (isset($acceptColumns[$value])) {
                            $subQuery->orWhere($acceptColumns[$value], 1);
                        }
                    }
                });
            })
            ->get();

        return response([
            'records' => $doctors
        ]);
    }
};
