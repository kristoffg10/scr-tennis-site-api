<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};
use App\Models\Article;
use App\Services\Article\ArticleService;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{
    /**
     * @var ArticleService
     */
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index(Request $request): Response
    {
        return $this->articleService->index($request);
    }

    public function store(ArticleRequest $request): Response
    {
        return $this->articleService->store($request);
    }

    /**
     * ArticleController show
     * @param  Article $article
     * @param  Request $request
     * @return Response
     */
    public function show(Article $article, Request $request): Response
    {
        return $this->articleService->show($article, $request);
    }

    /**
     * ArticleController update
     * @param  Article $article
     * @param  Request $request
     * @return Response
     */
    public function update(Article $article, ArticleRequest $request): Response
    {
        return $this->articleService->update($article, $request);
    }


    /**
     * ArticleController destroy
     * @param  Article $article
     * @param  Request $request
     * @return Response
     */
    public function destroy(Article $article, Request $request): Response
    {
        return $this->articleService->destroy($article, $request);
    }

    
}
