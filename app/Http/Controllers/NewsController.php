<?php

namespace App\Http\Controllers;

use App\Queries\CategoriesQueryBuilder;
use App\Queries\NewsQueryBuilder;
use App\Queries\QueryBuilder;
use Illuminate\Contracts\View\View;

final class NewsController extends Controller
{
    protected QueryBuilder $categoryQueryBuilder ;
    protected QueryBuilder $newsQueryBuilder;

    public function __construct (
        CategoriesQueryBuilder $categoryQueryBuilder,
        NewsQueryBuilder $newsQueryBuilder
    ) {
        $this->categoryQueryBuilder = $categoryQueryBuilder;
        $this->newsQueryBuilder = $newsQueryBuilder;
        $this->middleware('auth');
    }
    public function index(string $categoryName): View
    {
        return view('news.index', [
            'categoryName' => $categoryName,
            'articles' => $this->getNews()[$categoryName]
        ]);
    }

    public function show($categoryName, $articleId): View
    {
        return view('news.show', [
            'article' => $this->getNews()[$categoryName][$articleId]
        ]);
    }
}
