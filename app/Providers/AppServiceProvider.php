<?php

namespace App\Providers;

use App\Services\ImageService;
use App\Services\ProxyService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\MasterComposer;
use Illuminate\Pagination\Paginator;
use App\Services\OrderService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind("App\Services\Product\ProductServiceInterface", "App\Services\Product\ProductService");
        $this->app->bind("App\Services\Brand\BrandServiceInterface", "App\Services\Brand\BrandService");
        $this->app->bind("App\Services\Slider\SliderServiceInterface", "App\Services\Slider\SliderService");
        $this->app->bind("proxy", ProxyService::class);
        $this->app->bind("file.image", ImageService::class);
        $this->app->bind("order", OrderService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.app', MasterComposer::class);
        Paginator::useBootstrap();
    }
}
