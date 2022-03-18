<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Fontend\HomeController;
use App\Http\Controllers\Backend\ProductController;

use App\Http\Controllers\Fontend\UserLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//




Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('website.master');
    })->name('website');

    Route::get('/', [HomeController::class, 'Home'])->name('manage.home');

    // ----------shop by category---------

    Route::get('/shop/category/', [HomeController::class, 'shop_category'])->name('shop.catagory');
    Route::get('/product/under/category/{category_id}', [HomeController::class, 'productUnderCategory'])->name('product.under.catagory');

    // ------------website login-------
    Route::get('/user/login', [HomeController::class, 'userLogin'])->name('website.user.login');

    Route::get('/product/font/view', [HomeController::class, 'product_font_view'])->name('product.font.view');
    // For User Route ( login section)

    // Route::get('/User/login', [UserController::class, 'UserLogin'])->name('User.login');

    Route::get('/User/regestation', [UserController::class, 'UserRegestation'])->name('User.regestation');
    Route::post('/User/regestation/store', [UserController::class, 'UserRegestationstore'])->name('User.regestation.store');
    // ------ user login view--
    Route::post('/User/login', [UserLoginController::class, 'loginView'])->name('user.login.view');

    //cerisol
    Route::get('/product/crisis/{product_id}', [ProductController::class, 'crisis'])->name('crisis.view');
    // ================cart view=======================
    Route::get('/cart/view', [ProductController::class, 'cartview'])->name('cart.view');
    route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/clear-cart', [ProductController::class, 'clearCart'])->name('cart.clear');
    // Route::get('/remove-cart', [ProductController::class, 'removeCart'])->name('remove.cart');
});


Route::get("/form/login", [AdminController::class, 'login_view'])->name('admin.login');
Route::post("/login", [AdminController::class, 'login'])->name('login.view');



// Route::post('/admin/do-login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');
//for admin controller

// ---------------------all backend--------------------

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', function () {
        return view('master');
    })->name('home');

    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    // Route::match(['get','post'],"/login",[AdminController::class,'login'])->name('login.view');
    // Route::match(['get','post'],"/form/login",[AdminController::class,'login']);
    //login route
    Route::get('/Employee/view', [EmployeeController::class, 'EmployeeView'])->name('Employee.view');
    Route::get('/employee/details/{employee_id}', [EmployeeController::class, 'Employee_single_View'])->name('Employee.single.details');
    //

    //product route
    Route::get('/product/view', [ProductController::class, 'product_view'])->name('product.view');
    Route::get('/product/create', [ProductController::class, 'product_create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'product_store'])->name('product.store');
    Route::get('/product/viewdetails/{product_id}', [ProductController::class, 'ProductViewDetails'])->name('product.view.details');
    Route::get('/product/DeleteProduct/{product_id}', [ProductController::class, 'DeleteProduct'])->name('product.delete');
    Route::post('/product/update/{product_id}', [ProductController::class, 'product_update'])->name('product.update');
    Route::get('/product/edit/{product_id}', [ProductController::class, 'product_edit'])->name('product.edit');

    // product category
    Route::get('/product/category/create', [ProductController::class, 'Category'])->name('product.category');
    Route::post('/product/category/store', [ProductController::class, 'Category_store'])->name('product.category.store');
    Route::get('/product/category/view', [ProductController::class, 'Category_view'])->name('product.category.view');

    // Route::get('/product/deletecategory/{category_id}',[ProductController::class,'Category_delete'])->name('product.category.delete');




});
