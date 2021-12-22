<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\Backend\UserController;
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
// Route::group(['prefix'=>'Admin'], function(){
    Route::match(['get','post'],"/form/login",[AdminController::class,'login']);

Route::get('/', function () {
    return view('master');
});


//for admin controller
Route::match(['get','post'],"/form/login",[AdminController::class,'login']);
//login route
// Route::match(['get','post'],"/login",[UserController::class,'login'])->name('login.view');

//product route
Route::get('/product/view',[ProductController::class,'product_view'])->name('product.view');
Route::get('/product/create',[ProductController::class,'product_create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');
Route::get('/product/viewdetails/{product_id}', [ProductController::class, 'ProductViewDetails'])->name('product.view.details');
Route::get('/product/DeleteProduct/{product_id}', [ProductController::class, 'DeleteProduct'])->name('product.delete');
// product category
Route::get('/product/category/create',[ProductController::class,'Category'])->name('product.category');
Route::post('/product/category/store',[ProductController::class,'Category_store'])->name('product.category.store');
Route::get('/product/category/view',[ProductController::class,'Category_view'])->name('product.category.view');
// Route::get('/product/deletecategory/{category_id}',[ProductController::class,'Category_delete'])->name('product.category.delete');



// For Employee Route
// Route::match(['get','post'],'Employee/login',[EmployeeController::class,'Employee_login'])->name('employee.login');
 Route::get('/Employee/login',[EmployeeController::class,'EmployeeLogin'])->name('Employee.login');
 Route::get('/Employee/regestation',[EmployeeController::class,'EmployeeRegestation'])->name('Employee.regestation');
 Route::post('/Employee/regestation/store',[EmployeeController::class,'EmployeeRegestationstore'])->name('Employee.regestation.store');
Route::get('/Employee/view',[EmployeeController::class,'EmployeeView'])->name('Employee.view');

// });
