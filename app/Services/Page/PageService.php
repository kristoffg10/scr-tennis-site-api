<?php

namespace App\Services\Page;

use Illuminate\Http\Response;

use App\Models\{
    Page,
    TaxonomyCta,
    Provider,
    Plan,
    Taxonomy,
    Article
};

use Illuminate\Support\Facades\{
    DB,
    Validator,
    Log as LOG,
    Auth
};

use App\Services\Taxonomy\TaxonomyCtaService;
use App\Services\Taxonomy\TaxonomyService;
use App\Services\Provider\ProviderService;
use App\Services\Plan\PlanService;
use App\Services\Agent\AgentService;
use App\Services\Leader\LeaderService;
use App\Services\AnnualReport\AnnualReportService;
use App\Services\Article\ArticleService;
use App\Services\Career\CareerService;
use App\Services\Video\VideoService;
use App\Services\Settings\WebsiteSettingService;
use App\Services\File\FileService;


use App\Traits\GlobalTrait;

class PageService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

     public function __construct(
        protected TaxonomyCtaService $taxonomyCtaService,
        protected TaxonomyService $taxonomyService,
        protected ProviderService $providerService,
        protected PlanService $planService,
        protected AgentService $agentService,
        protected LeaderService $leaderService,
        protected AnnualReportService $annualReportService,
        protected ArticleService $articleService,
        protected CareerService $careerService,
        protected VideoService $videoService,
        protected WebsiteSettingService $websiteSettingService,
        protected FileService $fileService,
    ) {}

    /**
     * PageService getPageCategoriesData
     * @param  Request $request
     * @return Response
     */

    public function index($request): Response
    {
        $records = Page::orderBy('order')
            ->whereNotNull('order')
            ->with('page_sections', function ($q) {
                    $q->orderBy('order');
                })
                ->when($request->filled('keyword'), function ($query) use ($request) {
                    $query->where('name', 'LIKE', '%' . strtolower($request->keyword) . '%');
                })
                ->when($request->filled('category'), function ($query) use ($request) {
                    $query->where('category', 'LIKE', '%' . strtolower($request->category) . '%');
                })
                ->when($request->filled('all'), function ($query) {
                    return $query->get();
                }, function ($query) {
                    return $query->paginate(20);
                });

        return response([
            'records' => $records
        ]);
    }

    /**
     * PageService show
     * @param  Page $page
     * @param  Request $request
     * @return Response
     */
    public function show($request, Page $page): Response
    {
        $page->load('metadata');
        return response([
            'record' => $page
        ]);
    }

    /**
     * PageService update
     * @param  Page $page
     * @param  Request $request
     * @return Response
     */
    public function update($page, $request): Response
    {
        $this->metatags($page, $request);
        $page->load('metadata');
        return response([
            'record' => $page
        ]);
    }


    public function store($request): Response
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|unique:pages',
            'subtitle'  => 'required',
            'order'     => 'required'
        ]);

        $record = Page::create([
            'name' => $request->name,
            'identifier' => str_slug($request->name),
            'slug' => $this->slugify($request->name, 'Page'),
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'order' => $request->order,
            'date_published' => $request->date_published,
        ]);

        $this->metatags($record, $request);
        $this->generateLog($request->user(), "created this page ({$record->id})");
        return response([
            'record' => $record
        ]);
    }

   

    public function getCategories(): Response
    {
        $categories = Page::select('category')
            ->groupBy('category')
            ->orderByRaw('MIN(`order`) ASC')
            ->get();

        return response([
            'record' => $categories
        ]);
    }

    /**
     * PageService pageData
     * @param  string $identifier
     * @param  Request $request
     * @return Response
     */
    public function pageData(string $identifier, $request): Response
    {
        $data = [];

        $data = Page::whereIdentifier($identifier)
            ->select('id', 'name', 'slug', 'identifier','order')
            ->with(['metadata', 'page_sections' => function ($q) {
                $q->orderBy('order')
                    ->with([
                        'files' => function ($q) {
                            $q->orderBy('name');
                        },
                        'images',
                        'buttons' => function ($q) {
                            $q->orderBy('order')->with('images');
                        },
                         'testimonials' => function ($q) {
                            $q->orderBy('sequence')->with('images');
                        },
                        'faqs' => function ($q) {
                            $q->orderBy('sequence');
                        },
                        'cards' => function ($q) {
                            $q->orderBy('sequence')->with('images');
                        },
                        'tabs' => function ($q) {
                            $q->where('parent', 'root')
                            ->orderBy('sequence')
                            ->with([
                                'images',
                                'files',
                                'subs' => function ($q) {
                                    $q->orderBy('sequence')
                                        ->with([
                                            'faqs' => function ($q) {
                                                $q->orderBy('sequence');
                                            }
                                        ]);
                                },
                                'faqs' => function ($q) {
                                    $q->orderBy('sequence');
                                }
                            ]);
                        },

                        'videos' => function ($q) {
                            $q->orderBy('yt_published_date');
                        },
                        'hotlines' => function ($q) {
                            $q->orderBy('sequence');
                        },
                        'benefits' => function ($q) {
                            $q->orderByRaw("FIELD(type, 'medical', 'agent')")
                            ->orderBy('sequence', 'asc')
                            ->with('images');
                        },
                        'emails' => function ($q) {
                            $q->orderBy('sequence');
                        },
                        'socials' => function ($q) {
                            $q->orderBy('sequence')->with('images');
                        },  
                        
                    ]);
            }])
            ->first();
        
        //get additional modules 
        switch ($identifier) {
            case 'homepage':
                $data->global_cta = [
                    $this->taxonomyCtaService->getByType('telemedicine'),
                    $this->taxonomyCtaService->getByType('employee'),
                ];
                $data->featured_plans = $this->planService->getFeatured();
                $data->latest_press_release = $this->articleService->getArticleByTypeWithLimit('press-release', 5);
                break;

            case 'digital-platforms':
                $data->global_cta = [
                    $this->taxonomyCtaService->getByType('eshop_cta'),
                    $this->taxonomyCtaService->getByType('telemedicine'),
                    $this->taxonomyCtaService->getByType('employee'),
                ];
                break;
            
            case 'products':
                 $data->global_cta = [
                    $this->taxonomyCtaService->getByType('eshop_cta'),
                    $this->taxonomyCtaService->getByType('telemedicine'),
                    $this->taxonomyCtaService->getByType('employee'),
                ];
                $data->blogs = $this->articleService->getArticlesByCategory('97e0a130-f6b8-48e8-b8d0-ed14f2c0881c',4, 'blog');
                break;

            case 'services':
            case 'in-patient-availment':
            case 'out-patient-availment':
            case 'emergency-availment':
            case 'dental-availment':
            case 'claims':
            case 'availment-procedures':
            case 'mobile-app-availment':
            case 'non-accredited-hospital-availment':
                $data->global_cta = $this->taxonomyCtaService->getByType('providers');
                break;

            case 'provider-search':
                $data->providers = $this->providerService->getAllProviders($request);
                $data->clinics = $this->providerService->getFilter('clinic');
                $data->locations = $this->providerService->getFilter('location');
                $data->specializations = $this->providerService->getFilter('specialization');
                break;

            case 'group-insurance-plan':
            case 'group-products':
                $data->plans = $this->planService->getPlansByType('group');
                break;

            case 'individual-insurance-plan':
            case 'individual-and-msmes':
                $data->global_cta = $this->taxonomyCtaService->getByType('eshop_cta');
                $data->plans = $this->planService->getPlansByType('individual');
                break;
            
            
                
            case 'telemedicine':
                $data->global_cta = $this->taxonomyCtaService->getByType('insurance_upgrade');
                break;

            case 'agent-accreditation':
                $data->agent_positions = $this->taxonomyService->getByType('agent_position');
                break;
            
            case 'doctor-accreditation':
                $data->specialization = $this->taxonomyService->getByType('doctor-specialization');
                break;
            
            case 'agent-registry-list':
                $data->agents = $this->agentService->getAgents($request);
                $data->license_types = $this->agentService->getLicenseTypes();
                break;

            case 'request-for-proposal':
                $data->plans = $this->planService->getPlansByType('all');
                $data->global_cta = $this->taxonomyCtaService->getByType('forms_cta');
                $data->industry = $this->taxonomyService->getByType('industry_type');
                break;

            case 'bod-management-team':
                $data->director = $this->leaderService->getLeadersByType('director');
                $data->management = $this->leaderService->getLeadersByType('management');
                $data->others = $this->leaderService->getLeadersByType('others');
                break;
            
            case 'annual-integrated-reports':
                $data->featured = $this->annualReportService->getReportByFeatured(1);
                $data->non_featured = $this->annualReportService->getReportByFeatured(0);
                break;
            
            case 'sustainability':
                $data->articles = $this->articleService->getArticleByTypeWithPaginateLimitComplete('sustainability', 3);
                break;

            case 'careers':
                $data->careers = $this->careerService->getCareers();
                break;

            case 'resources':
                $data->latest_press_release = $this->articleService->getArticleByTypeWithLimit('press-release', 5);
                $data->latest_blog = $this->articleService->getArticleByTypeWithLimit('blog', 4);
                break;

            case 'press-releases':
                $data->latest_press_release = $this->articleService->getArticleByTypeWithLimit('press-release', 5);
                $data->press_releases = $this->articleService->getArticleByTypeWithPaginateLimit('press-release', 10, $request);
                break;
            
            case 'blogs':
                $data->featured_blogs = $this->articleService->getArticleByTypeWithFeatured('blog');
                $data->blogs = $this->articleService->getArticleByTypeWithPaginateLimit('blog', 12, $request);
                //$data->blogs = $this->articleService->getArticleVideoByTypeWithPaginateLimit('blog', 12, $request);
                $data->categories = $this->taxonomyService->getArticleTaxonomiesByType('blog');
                break;
            
            case 'search-results':
                $data->press_releases = $this->articleService->searchArticlesByType('press-release',$request);
                $data->blogs = $this->articleService->searchArticlesByType('blog',$request);
                $data->files= $this->fileService->searchFile($request);
                $data->pages= $this->searchPageData($request);
                $data->counter = [
                    'press_releases' => $this->articleService->countArticleResults('press-release',$request),
                    'blogs' => $this->articleService->countArticleResults('blog',$request),
                    'files' => $this->fileService->countFileResults($request),
                    'pages' => $this->countPagesResults($request),
                ];
                break;
        }


        return response([
            'record' => $data
        ]);
    }

    // inner page plans
     public function getInnerProductData(string $identifier, string $type, $request): Response
     {
        $data = [];
        $data = $this->planService->getPlanBySlugComplete($identifier);
        $data->other_plans = $this->planService->getPlansByTypeWithLimit($type, 3);
        $data->industry = $this->taxonomyService->getByType('industry_type');

        if ($type == 'individual') {
            $data->global_cta = [$this->taxonomyCtaService->getByType('online_shop')];
        }
        else {
            $data->global_cta = [$this->taxonomyCtaService->getByType('insurance_upgrade'), $this->taxonomyCtaService->getByType('forms_cta')];
        }

        
        return response([
            'record' => $data
        ]);        
     }

     // inner page articles
     public function getInnerArticleData(string $identifier, string $type, $request): Response
     {
        $data = [];
        $data = $this->articleService->getArticleBySlugCompleteType($identifier, $type);
        $data->other_articles = $this->articleService->getArticleByTypeWithLimit($type, 4);
        return response([
            'record' => $data
        ]);        
     }

     // inner page videos
     public function getInnerVideoData(string $identifier, string $type, $request): Response
     {
        $data = [];
        $data = $this->videoService->getVideoBySlugComplete($identifier);
        $data->other_articles = $this->articleService->getArticleByTypeWithLimit($type, 4);
        return response([
            'record' => $data
        ]);        
     }

     // inner page careers
    public function getInnerCareerData(string $identifier, $request): Response
    {
        $data = [];
        $data = $this->careerService->getCareerBySlugComplete($identifier);
        return response([
            'record' => $data
        ]);        
    }

    public function pageGlobalData($request): Response
    {
        $data = [];
        $keyword = $request->query('keyword');
        
        $pages = Page::where('name', 'LIKE', '%' . strtolower($keyword) . '%')
            ->select('id', 'name')
            ->get();

        $articles = DB::select("SELECT id, title FROM articles WHERE enabled = 1 AND type IN (?, ?) AND LOWER(title) LIKE ?", ['press-release', 'blog', '%' . strtolower($keyword) . '%']);

        $results = $pages->concat($articles)->unique('title')->values();

        return response([
            'record' => $results
        ]);   

    }

    public function searchPageData($request)
    {
        return Page::where('name', 'LIKE', '%' . strtolower($request->keyword) . '%')
            ->select('id', 'name', 'slug', 'identifier','order')
            ->paginate(10);
    }

    public function countPagesResults($request)
    {
        return Page::where('name', 'LIKE', '%' . strtolower($request->keyword) . '%')
            ->count();
    }

    public function pageHeaderPlans($request, string $type): Response
    {
        $data =  $this->planService->getPlanTitlesByType($type);
        return response([
            'record' => $data
        ]);   
    }

     public function pageFooterData($request): Response
    {
        $data =  $this->websiteSettingService->getFooterData();
        return response([
            'record' => $data
        ]);   
    }
}
