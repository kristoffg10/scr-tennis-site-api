<?php

namespace App\Services\Plan;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\{
    Plan
};
use Illuminate\Support\Str;
use App\Traits\GlobalTrait; 
use App\Services\Taxonomy\TaxonomyCtaService;

class PlanService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

     public function __construct(
        protected TaxonomyCtaService $taxonomyCtaService,
    ) {}

    /**
     * AgentService index
     * @param  Request $request
     * @return Response
     */
    public function index ($request): Response
    {
        $records = Plan::orderBy('title')
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
     * PlanService store
     * @param  Request $request
     * @return Response
     */
    public function store ($request): Response
    {
        $record = Plan::create([
            'title'             => $request->title,
            'subtitle'          => $request->subtitle,
            'description'       => $request->description,
            'type'              => $request->type,
            'upgrade_badge'     => $request->type === 'individual' ? 0 : $request->upgrade_badge,
            'plus_badge'        => $request->type === 'group' ? 0 : $request->plus_badge,
            'shop_link'         => $request->type === 'group' ? NULL : $request->shop_link,
            'sequence'          => $request->sequence,
            'enabled'           => $request->enabled,
            'featured'          => $request->featured,
            'slug'              => $this->slugify($request->title, 'Plan'),
        ]);

        // Attach media before returning so the created plan
        // already has its images/files persisted.
        if ($request->has('main_image')) {
            $this->addImages('plan', $request, $record, 'main_image');
        }

        if ($request->has('icon')) {
            $this->addImages('plan', $request, $record, 'icon');
        }

        if ($request->has('pdf')) {
            $this->updateImages('plan', $request, $record, 'pdf', 'file');
        }

        // Refresh relations so the response contains latest media
        $record->load('images', 'files');

        $this->generateLog(Auth::guard('api')->user(), "Created", "Plan", $record);

        return response([
            'record' => $record
        ]);
    }

    /**
     * PlanService show
     * @param  Plan $plan
     * @param  Request $request
     * @return Response
     */
    public function show ($plan, $request): Response
    {
        $plan->load('images','files');
        return response([
            'record' => $plan
        ]);
    }


    /**
     * PlanService update
     * @param  Plan $plan
     * @param  Request $request
     * @return Response
     */
    public function update ($plan, $request): Response
    {
        $data = [
            'title'         => $request->title,
            'subtitle'      => $request->subtitle,
            'description'   => $request->description,
            'type'          => $request->type,
            'upgrade_badge' => $request->type === 'individual' ? 0 : $request->upgrade_badge,
            'plus_badge'    => $request->type === 'group' ? 0 : $request->plus_badge,
            'shop_link'     => $request->type === 'group' ? null : $request->shop_link,
            'sequence'      => $request->sequence,
            'enabled'       => $request->enabled,
            'featured'      => $request->featured,
        ];

        if ($plan->title !== $request->title) {
            $data['slug'] = $this->slugify($request->title, 'Plan');
        }

        if ($request->has('main_image')) {
            $this->updateImages('plan', $request, $plan, 'main_image');
        }

        if ($request->has('icon')) {
            $this->updateImages('plan', $request, $plan, 'icon');
        }

        if ($request->has('pdf')) {
            $this->updateImages('plan', $request, $plan, 'pdf', 'file');
        }

        $plan->update($data);

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Plan", $plan);
        return response([
            'record' => $plan
        ]);
    }

    /**
     * PlanService destroy
     * @param  Plan $plan
     * @param  Request $request
     * @return Response
     */
    public function destroy ($plan, $request): Response
    {
        $plan->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Plan", $plan);
        return response([
            'record' => 'Plan deleted'
        ]);
    }

    public function getFeatured()
    {
         return Plan::where('featured', 1)
            ->where('enabled', 1)
            ->orderBy('sequence')
            ->with('images')
            ->get();
    }

    public function getPlansByType($type)
    {
        return Plan::where('enabled', 1)
            ->select('id','title','subtitle','description','type','upgrade_badge','sequence','upgrade_badge','slug')
            ->where('enabled', 1)
            ->when($type !== 'all', function ($query) use ($type) {
                $query->where('type', $type);
            })
            ->orderBy('sequence')
            ->with('images')
            ->get();
    }

    public function getPlansByTypeWithLimit($type, $limit)
    {
        return Plan::where('enabled', 1)
            ->select('id','title','subtitle','description','type','upgrade_badge','sequence','upgrade_badge','slug')
            ->where('type', $type)
            ->orderBy('sequence')
            ->limit($limit)
            ->with('images')
            ->get();
    }

    public function getPlanBySlugComplete($slug)
    {
        $plan = Plan::where('enabled', 1)
            ->where('slug', $slug)
            ->with('files')
            ->with([ 'images', 'highlights' => function ($query) {
                    $query->orderBy('sequence')
                        ->with('images');
                },
                'faqs' => function ($query) {
                    $query->orderBy('sequence');
                },
                'availments' => function ($query) {
                    $query->orderBy('sequence')
                        ->with('images');
                },
                'riders' => function ($query) {
                    $query->orderBy('sequence')
                        ->with('images');
                },
            ])
            ->first();

        if ($plan && $plan->upgrade_badge === 1) {
            $plan->global_cta = [   
                $this->taxonomyCtaService->getByType('insurance_upgrade'),
            ];
        }

        if ($plan && $plan->shop_link) {
            $plan->global_cta = [
                $this->taxonomyCtaService->getByType('online_shop'),
            ];
        }

        return $plan;
    }

    public function getPlanTitlesByType($type)
    {
        return Plan::where('enabled', 1)
            ->where('type',$type)
            ->orderby('title')
            ->select('title','type','slug')
            ->get();
    }
}