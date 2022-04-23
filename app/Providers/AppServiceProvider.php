<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;

use App\Models\Category;
use App\Models\RequestProduct;
use App\Models\User;
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



        $order = RequestProduct::all()->count();
        view::share('order', $order);

        $customer = User::all()->count();
        view::share('customer', $customer);
        $category = Category::all()->count();
        view::share('category', $category);

        // $brand = Brand::all()->count();
        // view::share('brand', $brand);

        $allProduct = Product::all()->count();
        view::share('allProduct', $allProduct);
    }
}
