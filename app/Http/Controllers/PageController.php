<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};
use App\Models\Page;
use App\Services\Page\PageService;

class PageController extends Controller
{
    /**
     * @var PageService
     */
    protected $pageService;

    /**
     * PageController constructor
     * @param PageService $pageService
     */
    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function index(Request $request): Response
    {
        return $this->pageService->index($request);
    }

      /**
     * PageController show
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function show(Request $request, Page $page): Response
    {
        return $this->pageService->show($request, $page);
    }

      /**
     * PageController update
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function update(Page $page, Request $request): Response
    {
        return $this->pageService->update($page, $request);
    }


    public function store(Request $request): Response
    {
        return $this->pageService->store($request);
    }

    public function pageData(string $identifier, Request $request): Response
    {
        return $this->pageService->pageData($identifier, $request);
    }

    public function pageDataByName(string $identifier, Request $request): Response
    {
        return $this->pageService->pageDataByName($identifier, $request);
    }


    public function productList(Request $request): Response
    {
        return $this->pageService->productList($request);
    }

    public function getCategories(Request $request): Response
    {
        return $this->pageService->getCategories($request);
    }


    public function getInnerProductData(string $identifier, string $type, Request $request): Response
    {
        return $this->pageService->getInnerProductData($identifier, $type, $request);
    }

    public function getInnerArticleData(string $identifier, string $type, Request $request): Response
    {
        return $this->pageService->getInnerArticleData($identifier, $type, $request);
    }

    public function getInnerCareerData(string $identifier, Request $request): Response
    {
        return $this->pageService->getInnerCareerData($identifier, $request);
    }

    public function getInnerVideoData(string $identifier, string $type, Request $request): Response
    {
        return $this->pageService->getInnerVideoData($identifier, $type, $request);
    }

    public function pageGlobalData(Request $request): Response
    {
        return $this->pageService->pageGlobalData($request);
    }

    public function pageHeaderPlans(Request $request, string $type): Response
    {
        return $this->pageService->pageHeaderPlans($request, $type);
    }

    public function pageFooterData(Request $request): Response
    {
        return $this->pageService->pageFooterData($request);
    }
}
