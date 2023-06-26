<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class NewsController extends Controller
{
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
