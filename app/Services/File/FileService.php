<?php

namespace App\Services\File;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\File;
use App\Traits\GlobalTrait; 
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class FileService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;


    public function searchFile($request)
    {
        return File::where('name', 'LIKE', '%' . $request->keyword . '%')
            ->orderBy('created_at', $request->filled('date') && in_array(strtolower($request->date), ['asc', 'desc'])
                    ? $request->date : 'desc'
            )
            ->paginate(12);
    }

    public function countFileResults($request)
    {
        return File::where('name', 'LIKE', '%' . $request->keyword . '%')
            ->count();
    }

}
