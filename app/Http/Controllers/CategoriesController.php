<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CategoriesController extends Controller
{
    public function index(): View
    {
        return view('categories.index', ['categories' => array_keys($this->getNews())]);
    }
}
