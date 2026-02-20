<?php

namespace App\Services\AnnualReport;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\AnnualReport;
use App\Traits\GlobalTrait; 

class AnnualReportService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * AgentService index
     * @param  Request $request
     * @return Response
     */
    public function index ($request): Response
    {
        $records = AnnualReport::orderBy('title')
        ->when(isset($request->keyword), function ($query) use ($request) {
            $query->where('title', 'LIKE', '%' . strtolower($request->keyword).'%');	
        })
        ->when($request->filled('all') , function ($query, $request) {
            return $query->get();
        }, function ($query) {
            return $query->paginate(20);
        });

        return response([
            'records' => $records
        ]);
    }

    /**
     * AgentService store
     * @param  Request $request
     * @return Response
     */
    public function store ($request): Response
    {
        $record = AnnualReport::create([
            'title'             => $request->title,
            'subtitle'          => $request->subtitle,
            'description'       => $request->description,
            'featured'          => $request->featured
        ]);

        $this->addImages('annual_report', $request, $record, 'main_image');
        $this->updateImages('annual_report', $request, $record, 'pdf', 'file');
        
        $this->generateLog(Auth::guard('api')->user(), "Created", "Annual Report", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * AgentService show
     * @param  Agent $annual_report
     * @param  Request $request
     * @return Response
     */
    public function show ($annual_report, $request): Response
    {
        $annual_report->load('images', 'files');
        return response([
            'record' => $annual_report
        ]);
    }


    /**
     * AgentService update
     * @param  Agent $annual_report
     * @param  Request $request
     * @return Response
     */
    public function update ($annual_report, $request): Response
    {
        $annual_report->update([
            'title'             => $request->title,
            'subtitle'          => $request->subtitle,
            'description'       => $request->description,
            'featured'          => $request->featured
        ]);

        $this->updateImages('annual_report', $request, $annual_report, 'main_image');
        $this->updateImages('annual_report', $request, $annual_report, 'pdf', 'file');

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Annual Report", $annual_report);
        return response([
            'record' => $annual_report
        ]);
    }

    /**
     * AgentService destroy
     * @param  Agent $annual_report
     * @param  Request $request
     * @return Response
     */
    public function destroy ($annual_report, $request): Response
    {
        $annual_report->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Annual Report", $annual_report);
        return response([
            'record' => 'Annual Report deleted'
        ]);
    }

    public function getReportByFeatured($status)
    {
        return AnnualReport::where('featured', $status)
            ->orderBy('title','desc')
            ->with('images','files')
            ->get();
    }

   
}
