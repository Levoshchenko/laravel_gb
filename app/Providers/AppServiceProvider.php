<?php

declare(strict_types=1);

namespace App\Providers;

use App\Queries\CategoriesQueryBuilder;
use App\Queries\NewsQueryBuilder;
use App\Queries\QueryBuilder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Queries\ProfilesQueryBuilder;
use App\Queries\DataSourcesQueryBuilder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       $this->app->bind(QueryBuilder::class, CategoriesQueryBuilder::class);
       $this->app->bind(QueryBuilder::class, NewsQueryBuilder::class);
        $this->app->bind(QueryBuilder::class, DataSourcesQueryBuilder::class);
        $this->app->bind(QueryBuilder::class, ProfilesQueryBuilder::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
    }
}
