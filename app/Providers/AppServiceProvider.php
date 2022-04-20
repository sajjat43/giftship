<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;

use App\Models\Category;
use Illuminate\Support\Facades\View;
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
        $product = Product::where('featured', '1')->get();

        view::share('categories',  $categories);
        view::share('brand',  $brand);
        view::share('product', $product);
    }
}
