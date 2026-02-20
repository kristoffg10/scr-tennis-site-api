<?php

namespace App\Services\Taxonomy;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\TaxonomyCta;
use App\Traits\GlobalTrait; 

class TaxonomyCtaService
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
        $records = TaxonomyCta::orderBy('type')
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
        // ALL GLOBAL CTA WILL BE HARDCODED
        // $record = TaxonomyCta::create([
        //     'firstname'         => $request->firstname,
        //     'lastname'          => $request->lastname,
        //     'middle_initial'    => $request->middle_initial,
        //     'license_type'      => $request->license_type,
        //     'license_id'        => $request->license_id,
        //     'effectivity'       => $request->effectivity,
        //     'expiry'            => $request->expiry,
        // ]);
            $this->generateLog(Auth::guard('api')->user(), "Created", "TaxonomyCta", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * AgentService show
     * @param  TaxonomyCta $taxonomyCta
     * @param  Request $request
     * @return Response
     */
    public function show ($taxonomy_cta, $request): Response
    {
        $taxonomy_cta->load('images');
        return response([
            'record' => $taxonomy_cta
        ]);
    }


    /**
     * AgentService update
     * @param  TaxonomyCta $taxonomyCta
     * @param  Request $request
     * @return Response
     */
    public function update ($taxonomy_cta, $request): Response
    {
        $taxonomy_cta->update([
            'title'         => $request->title,
            'subtitle'      => $request->subtitle,
            'description'   => $request->description,
            'button_name'   => $request->button_name,
            'has_button'    => $request->has_button,
            'is_link_out'   => $request->is_link_out,
            'link'          => $request->link,
        ]);
        $this->generateLog(Auth::guard('api')->user(), "Changed", "TaxonomyCta", $taxonomy_cta);

        if ($request->has('main_image')) {
            $this->updateImages('taxonomy_cta', $request, $taxonomy_cta, 'main_image');
        }

        if ($request->has('mobile_image')) {
            $this->updateImages('taxonomy_cta', $request, $taxonomy_cta, 'mobile_image');
        }

        return response([
            'record' => $taxonomy_cta
        ]);
    }

    /**
     * AgentService destroy
     * @param  TaxonomyCta $taxonomyCta
     * @param  Request $request
     * @return Response
     */
    public function destroy ($taxonomy_cta, $request): Response
    {
        //GLOBAL CTA CANNOT BE DELETED
        // $taxonomyCta->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "TaxonomyCta", $taxonomy_cta);
        return response([
            'record' => 'TaxonomyCta deleted'
        ]);
    }

    public function getByType($type)
    {
        return TaxonomyCta::where('type', $type)
            ->select('id','title','subtitle','description','button_name','has_button','is_link_out','link','sequence')
            ->with('images')
            ->first();
    }
}
