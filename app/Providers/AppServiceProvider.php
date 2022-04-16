<?php

namespace App\Providers;

use App\Models\Brand;
use Illuminate\Support\Facades\View;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        $brand = Brand::all();
        view::share('categories',  $categories);
        view::share('brand',  $brand);
    }
}
