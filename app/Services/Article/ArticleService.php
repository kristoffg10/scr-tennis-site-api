<?php

namespace App\Services\Article;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\Article;
use App\Models\Video;
use App\Traits\GlobalTrait; 
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class ArticleService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * ArticleService index
     * @param  Request $request
     * @return Response
     */
    public function index ($request): Response
    {
        $records = Article::orderBy('date')
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->with('video')
            ->when(isset($request->keyword), function ($query) use ($request) {
                $query->where('title', 'LIKE', '%' . strtolower($request->keyword) . '%');
            })
            ->when($request->filled('type'), function ($query) use ($request) {
                $query->where('type', $request->type);
            })
            ->when($request->filled('category_id'), function ($query) use ($request) {
                $query->where('category_id', $request->category_id);
            })
            ->when(in_array($request->query('featured'), ['0', '1'], true), function ($query) use ($request) {
                $query->where('featured', (int) $request->query('featured'));
            })
            ->when(in_array($request->query('enabled'), ['0', '1'], true), function ($query) use ($request) {
                $query->where('enabled', (int) $request->query('enabled'));
            })
            ->when($request->filled('all'), function ($query, $request) {
                return $query->get();
            }, function ($query) {
                return $query->paginate(20);
            });

        return response([
            'records' => $records
        ]);
    }

    /**
     * ArticleService store
     * @param  Request $request
     * @return Response
     */
    public function store ($request): Response
    {
        $record = Article::create([
            'title'             => $request->title,
            'content'           => $request->content,
            'type'              => $request->type,
            'date'              => $request->date,
            'slug'              => $this->slugify($request->title, 'Article'),
            'category_id'       => $request->category_id,
            'enabled'           => $request->enabled,
            'featured'          => $request->featured,
        ]);
        

        $this->addImages('article', $request, $record, 'main_image');

        if ($request->has('gallery')) {
            $this->addImages('article', $request, $record, 'gallery');
        }

        $this->generateLog(Auth::guard('api')->user(), "Created", "Article", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * ArticleService show
     * @param  Article $article
     * @param  Request $request
     * @return Response
     */
    public function show ($article, $request): Response
    {
        $article->load('images', 'category', 'video');
        return response([
            'record' => $article
        ]);
    }


    /**
     * ArticleService update
     * @param  Article $article
     * @param  Request $request
     * @return Response
     */
    public function update ($article, $request): Response
    {
         $data = [
            'title'             => $request->title,
            'content'           => $request->content,
            'type'              => $request->type,
            'date'              => $request->date,
            'category_id'       => $request->category_id,
            'enabled'           => $request->enabled,
            'featured'          => $request->featured,
        ];

        if ($article->title !== $request->title) {
            $data['slug'] = $this->slugify($request->title, 'Article');
        }

        $article->update($data);
        
        if ($request->has('main_image')) {
            $this->updateImages('article', $request, $article, 'main_image');
        }
        
        if ($request->has('gallery')) {
            $this->updateImages('article', $request, $article, 'gallery');
        }

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Article", $article);
        $article->load('images', 'category', 'video');
        return response([
            'record' => $article
        ]);
    }

    /**
     * ArticleService destroy
     * @param  Article $article
     * @param  Request $request
     * @return Response
     */
    public function destroy ($article, $request): Response
    {
        $article->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Article", $article);
        return response([
            'record' => 'Article deleted'
        ]);
    }

    public function getArticleByTypeWithPaginateLimitComplete($type, $limit)
    {
        return Article::orderBy('date', 'desc')
            ->where('type', $type)
            ->where('enabled', 1)
            ->with('images')
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->paginate($limit);
    }

    public function getArticleByTypeWithPaginateLimit($type, $limit, $request)
    {
        return Article::select('id','title','date','slug','category_id')
            ->where('type', $type)
            ->where('enabled', 1)
            ->with('images')
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->when($request->filled('keyword'), function ($query) use ($request) {
                $keyword = '%' . $request->keyword . '%';
                $query->where('title', 'LIKE', $keyword);
            })
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('name', $request->category);
                });
            })
            ->orderBy('date', $request->filled('date') && in_array(strtolower($request->date), ['asc', 'desc'])
                    ? $request->date : 'desc'
            )
            ->paginate($limit);
    }

    public function getArticleVideoByTypeWithPaginateLimit($type, $limit, $request)
    {
        $order = $request->filled('date') && in_array(strtolower($request->date), ['asc', 'desc'])
        ? $request->date
        : 'desc';

        $articles = Article::select('id','title','date','slug','category_id')
            ->where('type', $type)
            ->where('enabled', 1)
            ->with('images')
            ->with(['category:id,name'])
            ->when($request->filled('keyword'), function ($query) use ($request) {
                $query->where('title', 'LIKE', '%' . $request->keyword . '%');
            })
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('name', $request->category);
                });
            })
            ->get();

        $videos = Video::where('enabled', 1)
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('name', $request->category);
                });
            })
            ->when($request->filled('keyword'), function ($query) use ($request) {
                $query->where('yt_title', 'LIKE', '%' . $request->keyword . '%');
            })
            ->get();

        // Merge + normalize date field
        $collection = $articles
            ->merge($videos)
            ->sortBy('date', SORT_REGULAR, $order === 'desc')
            ->values();

        // Manual pagination
        $page = LengthAwarePaginator::resolveCurrentPage();
        $paginated = new LengthAwarePaginator(
            $collection->slice(($page - 1) * $limit, $limit),
            $collection->count(),
            $limit,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return $paginated;
    }

    public function getArticleByTypeWithLimit($type, $limit)
    {
        return Article::orderBy('date', 'desc')
            ->select('id','title','date','slug','category_id')
            ->where('type', $type)
            ->where('enabled', 1)
            ->with('images')
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->limit($limit)
            ->get();
    }

    public function getArticleByTypeWithFeatured($type)
    {
        return Article::orderBy('date', 'desc')
            ->select('id','title','date','slug','category_id')
            ->where('type', $type)
            //->where('featured', 1)
            ->where('enabled', 1)
            ->with('images')
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->get();
    }

    public function getArticleBySlugComplete($identifier)
    {
        return Article::where('slug', $identifier)
            ->where('enabled', 1)
            ->with('images')
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->first();
    }

    public function getArticleBySlugCompleteType($identifier, $type)
    {
        return Article::where('slug', $identifier)
            ->where('enabled', 1)
            ->where('type',$type)
            ->with('images')
            ->with('video')
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->first();
    }

    public function getArticlesByCategory($category_id, $limit, $type)
    {
        return Article::where('category_id', $category_id)
            ->where('enabled', 1)
            ->where('type', $type)
            ->select('id','title','date','slug','category_id')
            ->with('images')
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->limit($limit)
            ->get();
    }

    public function searchArticlesByType($type,$request)
    {
        return Article::where('enabled', 1)
            ->where('title', 'LIKE', '%' . $request->keyword . '%')
            ->select('id','title','date','slug','category_id')
            ->where('type', $type)
            ->with('images')
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->orderBy('date', $request->filled('date') && in_array(strtolower($request->date), ['asc', 'desc'])
                    ? $request->date : 'desc'
            )
            ->paginate(10);
    }

    public function countArticleResults($type,$request)
    {
        return Article::where('enabled', 1)
            ->where('title', 'LIKE', '%' . $request->keyword . '%')
            ->where('type', $type)
            ->count();
    }

}