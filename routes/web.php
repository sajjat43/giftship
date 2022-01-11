<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Fontend\EmployeeController;

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


Route::get('/', [HomeController::class, 'Home'])->name('manage.home');
Route::group(['prefix' => 'user'], function () {
    Route::get('/', function () {
        return view('website.master');
    })->name('website');

    Route::get('/user/login', [HomeController::class, 'userLogin'])->name('website.user.login');

    Route::get('/product/font/view', [HomeController::class, 'product_font_view'])->name('product.font.view');
    // For Employee Route
    // Route::match(['get','post'],'Employee/login',[EmployeeController::class,'Employee_login'])->name('employee.login');
    Route::get('/Employee/login', [EmployeeController::class, 'EmployeeLogin'])->name('Employee.login');
    Route::get('/Employee/regestation', [EmployeeController::class, 'EmployeeRegestation'])->name('Employee.regestation');
    Route::post('/Employee/regestation/store', [EmployeeController::class, 'EmployeeRegestationstore'])->name('Employee.regestation.store');

    //cerisol
    Route::get('/product/crisis/{product_id}', [ProductController::class, 'crisis'])->name('crisis.view');
});


Route::match(['get', 'post'], "/form/login", [AdminController::class, 'login_view'])->name('admin.login');
Route::match(['get', 'post'], "/login", [AdminController::class, 'login'])->name('login.view');



// Route::post('/admin/do-login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');
//for admin controller

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
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
