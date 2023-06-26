<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CreateArticlePageController;
use App\Http\Controllers\DataRequestController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SignInPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcomePage');
});

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/categories/{categoryName}', [NewsController::class, 'index']);

Route::get('/categories/{categoryName}/{articleId}', [NewsController::class, 'show']);

Route::get('/create', [CreateArticlePageController::class, 'index']);

Route::get('/signin', [SignInPageController::class, 'index']);

Route::get('/about', [AboutPageController::class, 'index']);

Route::get('/request/create', [DataRequestController::class, 'create']);

Route::post('/request/store', [DataRequestController::class, 'store']);
