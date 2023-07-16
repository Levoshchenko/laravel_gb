<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CreateArticlePageController;
use App\Http\Controllers\DataRequestController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\SignInPageController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcomePage');
});
Route::group(['middleware' => 'auth'], static function () {
    Route::group(['prefix' => 'account'], static function () {
        Route::get('/', AccountController::class)->name('account');
    });

// Admin
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => 'check.admin',

    ], static function () {
        Route::get('/', AdminController::class)
            ->name('index');
        Route::resource('/categories', AdminCategoryController::class);
        Route::resource('/news', AdminNewsController::class);
        Route::resource('/data-sources', AdminDataSourceController::class);
        Route::resource('/users', AdminProfileController::class);
    });
});

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/categories/{categoryName}', [NewsController::class, 'index']);

Route::get('/categories/{categoryName}/{articleId}', [NewsController::class, 'show']);

Route::get('/create', [CreateArticlePageController::class, 'index']);

Route::get('/signin', [SignInPageController::class, 'index']);

Route::get('/about', [AboutPageController::class, 'index']);

Route::get('/request/create', [DataRequestController::class, 'create']);

Route::post('/request/store', [DataRequestController::class, 'store']);

Route::get('/sessions', function () {
    session()->put('mysession', 'Test session');
    if (session()->has('mysession')) {
        dd(session()->all(), session()->get('mysession'));
        session()->forget('mysession');
    }
});

Auth::routes();

Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('home');
