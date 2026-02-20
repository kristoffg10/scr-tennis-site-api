<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AnnouncementController,
    ArticleController,
    VideoController,
    CmsUserController,
    DashboardController,
    ExtraController,
    FaqsCategoryController,
    FaqsController,
    PageController,
    PageSectionController,
    RoleController,
    TaxonomyCtaController,
    TaxonomyController,

    AgentController,
    ProviderController,
    LeaderController,
    CareerController,
    AnnualReportController,

    PlanController,
    PlanHighlightController,
    PlanFaqController,
    PlanRiderController,
    PlanAvailmentController,

    SectionTestimonialController,
    SectionFaqController,
    SectionCardController,
    SectionTabController,
    SectionVideoController,
    SectionHotlineController,
    SectionEmailController,
    SectionSocialController,
    SectionBenefitController,

    SubmissionController,
    WebsiteSettingController
};


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'v1', 'middleware' => 'throttle:1000,1'], function () {
    // Global
    Route::group(['prefix' => 'global'], function () {
        Route::group(['prefix' => 'user', 'namespace' => 'App\Http\Controllers', 'controller' => 'UserController'], function () {
            Route::group(['middleware' => 'auth.global'], function () {
                Route::post('logout', 'logout');
                Route::get('check-token', 'checkToken');
            });
            Route::post('login', 'login');
        });
    });

    // CMS
    Route::group(['prefix' => 'cms', 'middleware' => 'auth.admin'], function () {
        // Dashboard
        Route::apiResource('dashboard', DashboardController::class);
        //Page Group
        Route::controller(PageController::class)->group(function () {
            Route::get('page-categories', 'getCategories');
        });

        // Pages
        Route::apiResource('pages', PageController::class);
        Route::get('page/show/{page}', [PageController::class, 'show']);
        Route::patch('page/update/{page}', [PageController::class, 'update']);

        // Page Sections
        Route::apiResource('page-section', PageSectionController::class);

        // CMS Users (Editors)
        Route::apiResource('users', CmsUserController::class);

        // Roles
        Route::apiResource('roles', RoleController::class);

        // Extra
        Route::prefix('extra')->controller(ExtraController::class)->group(function () {
            Route::post('delete-item', 'deleteItem');
            Route::delete('delete-image/{image}', 'deleteImage');
            Route::delete('delete-file/{image}', 'deletefile');
        });

        // Generic re-order endpoint used by various CMS modules
        Route::post('re-order', [ExtraController::class, 'reOrder']);


        // global modules
        Route::apiResource('agents', AgentController::class);
        Route::apiResource('providers', ProviderController::class);
        Route::apiResource('taxonomy-cta', TaxonomyCtaController::class) ->parameters(['taxonomy-cta' => 'taxonomy_cta']);
        Route::apiResource('leaders', LeaderController::class);
        Route::apiResource('careers', CareerController::class);
        Route::apiResource('annual-reports', AnnualReportController::class);
        Route::apiResource('announcements', AnnouncementController::class);
        Route::apiResource('articles', ArticleController::class);
        Route::apiResource('videos', VideoController::class);

        Route::prefix('setting')->controller(WebsiteSettingController::class)->group(function () {
            Route::get('show', 'show');
            Route::post('manage', 'manage');
        });


        //global taxonomy
        Route::prefix('taxonomy/{type}')->group(function () {
            Route::get('/', [TaxonomyController::class, 'index']);        
            Route::post('/', [TaxonomyController::class, 'store']);      
            Route::get('{taxonomy}', [TaxonomyController::class, 'show']); 
            Route::patch('{taxonomy}', [TaxonomyController::class, 'update']); 
            Route::delete('{taxonomy}', [TaxonomyController::class, 'destroy']);
        });


        //plans
        Route::apiResource('plans', PlanController::class);
        //plan highlights
        Route::prefix('plan-highlight/{plan_id}')->group(function () {
            Route::get('/', [PlanHighlightController::class, 'index']);        
            Route::post('/', [PlanHighlightController::class, 'store']);      
            Route::get('{highlight}', [PlanHighlightController::class, 'show']); 
            Route::patch('{highlight}', [PlanHighlightController::class, 'update']); 
            Route::delete('{highlight}', [PlanHighlightController::class, 'destroy']);
        });
        //plan faqs
        Route::prefix('plan-faq/{plan_id}')->group(function () {
            Route::get('/', [PlanFaqController::class, 'index']);
            Route::post('/', [PlanFaqController::class, 'store']);
            Route::get('{faq}', [PlanFaqController::class, 'show']);
            Route::patch('{faq}', [PlanFaqController::class, 'update']);
            Route::delete('{faq}', [PlanFaqController::class, 'destroy']);
        });
        //plan riders
        Route::prefix('plan-rider/{plan_id}')->group(function () {
            Route::get('/', [PlanRiderController::class, 'index']);
            Route::post('/', [PlanRiderController::class, 'store']);
            Route::get('{rider}', [PlanRiderController::class, 'show']);
            Route::patch('{rider}', [PlanRiderController::class, 'update']);
            Route::delete('{rider}', [PlanRiderController::class, 'destroy']);
        });
        //plan availments
        Route::prefix('plan-availment/{plan_id}')->group(function () {
            Route::get('/', [PlanAvailmentController::class, 'index']);
            Route::post('/', [PlanAvailmentController::class, 'store']);
            Route::get('{availment}', [PlanAvailmentController::class, 'show']);
            Route::patch('{availment}', [PlanAvailmentController::class, 'update']);
            Route::delete('{availment}', [PlanAvailmentController::class, 'destroy']);
        });

        //page section modules
        Route::prefix('section-testimonial/{parent_id}')->group(function () {
            Route::get('/', [SectionTestimonialController::class, 'index']);       
            Route::post('/', [SectionTestimonialController::class, 'store']);      
            Route::get('{testimonial}', [SectionTestimonialController::class, 'show']); 
            Route::patch('{testimonial}', [SectionTestimonialController::class, 'update']); 
            Route::delete('{testimonial}', [SectionTestimonialController::class, 'destroy']);
        });
        Route::prefix('section-faq/{parent_id}')->group(function () {
            Route::get('/', [SectionFaqController::class, 'index']);        
            Route::post('/', [SectionFaqController::class, 'store']);      
            Route::get('{faq}', [SectionFaqController::class, 'show']); 
            Route::patch('{faq}', [SectionFaqController::class, 'update']); 
            Route::delete('{faq}', [SectionFaqController::class, 'destroy']);
        });
        Route::prefix('section-card/{parent_id}')->group(function () {
            Route::get('/', [SectionCardController::class, 'index']);        
            Route::post('/', [SectionCardController::class, 'store']);      
            Route::get('{card}', [SectionCardController::class, 'show']); 
            Route::patch('{card}', [SectionCardController::class, 'update']); 
            Route::delete('{card}', [SectionCardController::class, 'destroy']);
        });
        Route::prefix('section-benefit/{parent_id}')->group(function () {
            Route::get('/', [SectionBenefitController::class, 'index']);        
            Route::post('/', [SectionBenefitController::class, 'store']);      
            Route::get('{benefit}', [SectionBenefitController::class, 'show']); 
            Route::patch('{benefit}', [SectionBenefitController::class, 'update']); 
            Route::delete('{benefit}', [SectionBenefitController::class, 'destroy']);
        });
        Route::prefix('section-tab/{parent_id}')->group(function () {
            Route::get('/', [SectionTabController::class, 'index']);        
            Route::post('/', [SectionTabController::class, 'store']);      
            Route::get('{tab}', [SectionTabController::class, 'show']); 
            Route::patch('{tab}', [SectionTabController::class, 'update']); 
            Route::delete('{tab}', [SectionTabController::class, 'destroy']);
            
            // Nested FAQs for section tabs (used in Help and FAQ center)
            Route::prefix('{tab_id}/section-faq')->group(function () {
                Route::get('/', [SectionFaqController::class, 'indexForTab']);        
                Route::post('/', [SectionFaqController::class, 'storeForTab']);      
                Route::get('{faq}', [SectionFaqController::class, 'showForTab']); 
                Route::patch('{faq}', [SectionFaqController::class, 'updateForTab']); 
                Route::delete('{faq}', [SectionFaqController::class, 'destroyForTab']);
            });
        });
        Route::prefix('section-video/{parent_id}')->group(function () {
            Route::get('/', [SectionVideoController::class, 'index']);        
            Route::post('/', [SectionVideoController::class, 'store']);      
            Route::get('{video}', [SectionVideoController::class, 'show']); 
            Route::patch('{video}', [SectionVideoController::class, 'update']); 
            Route::delete('{video}', [SectionVideoController::class, 'destroy']);
        });
        Route::prefix('section-hotline/{parent_id}')->group(function () {
            Route::get('/', [SectionHotlineController::class, 'index']);        
            Route::post('/', [SectionHotlineController::class, 'store']);      
            Route::get('{hotline}', [SectionHotlineController::class, 'show']); 
            Route::patch('{hotline}', [SectionHotlineController::class, 'update']); 
            Route::delete('{hotline}', [SectionHotlineController::class, 'destroy']);
        });
        Route::prefix('section-email/{parent_id}')->group(function () {
            Route::get('/', [SectionEmailController::class, 'index']);        
            Route::post('/', [SectionEmailController::class, 'store']);      
            Route::get('{email}', [SectionEmailController::class, 'show']); 
            Route::patch('{email}', [SectionEmailController::class, 'update']); 
            Route::delete('{email}', [SectionEmailController::class, 'destroy']);
        });
        Route::prefix('section-social/{parent_id}')->group(function () {
            Route::get('/', [SectionSocialController::class, 'index']);        
            Route::post('/', [SectionSocialController::class, 'store']);      
            Route::get('{social}', [SectionSocialController::class, 'show']); 
            Route::patch('{social}', [SectionSocialController::class, 'update']); 
            Route::delete('{social}', [SectionSocialController::class, 'destroy']);
        });

    });

    // Web
    Route::group(['prefix' => 'web'], function () {

        // // Smart Searches
        // Route::controller(DashboardController::class)->group(function () {
        //     Route::get('smart-search', 'smartSearch');
        //     Route::get('smart-search-filter', 'smartSearchFilter');
        //     //Route::get('page-data/{identifier}', 'pageData');
        // });
        // Route::get('smart-search', [DashboardController::class, 'smartSearch']);

        // Page Sections (public)
        Route::controller(PageSectionController::class)->group(function () {
            Route::get('page-section/{page_section}', 'show');
        });

        Route::controller(PageController::class)->group(function () {
            Route::get('page-data/products/{identifier}/{type}', 'getInnerProductData');
            Route::get('page-data/careers/{identifier}', 'getInnerCareerData');
            Route::get('page-data/articles/{identifier}/{type}', 'getInnerArticleData');
            Route::get('page-data/videos/{identifier}/{type}', 'getInnerVideoData');
            Route::get('page-data/{identifier}', 'pageData');
            Route::get('global-data', 'pageGlobalData');

            Route::get('header-plans/{type}', 'pageHeaderPlans');
            Route::get('footer-data', 'pageFooterData');
        });

         Route::controller(SubmissionController::class)->group(function () {
            Route::post('submit-accreditation/hospital', 'submitHospitalAccreditation');
            Route::post('submit-accreditation/clinic', 'submitClinicAccreditation');
            Route::post('submit-accreditation/doctor', 'submitDoctorAccreditation');
            Route::post('submit-accreditation/agent', 'submitAgentAccreditation');
            Route::post('submit-proposal', 'submitProposal');
            Route::post('career-application', 'submitCareerApplication');
            Route::post('submit-inquiry', 'submitInquiry');
        });

         



    });
});