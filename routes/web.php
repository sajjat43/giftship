<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Backend\UserController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\pdfController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Fontend\CartController;
use App\Http\Controllers\Fontend\HomeController;
use App\Http\Controllers\Fontend\orderController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\reportController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Fontend\UserLoginController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Backend\Brand\BrandController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Backend\category\CategoryController;
use App\Http\Controllers\Backend\wishList\wishListController;
use App\Http\Controllers\Backend\subCategory\subCategoryController;

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
Route::get('/shop/category/', [HomeController::class, 'shop_category'])->name('shop.catagory');
// Route::get('/shop/Brand/', [HomeController::class, 'shop_Brand'])->name('shop.brand');
//  category,subcategory,brand under product
Route::get('/product/under/category/{category_id}', [HomeController::class, 'productUnderCategory'])->name('product.under.catagory');
Route::get('/product/under/brand/{brand_id}', [HomeController::class, 'productUnderBrand'])->name('product.under.brand');
Route::get('/product/under/subcategory/{id}', [HomeController::class, 'productUnderSubcategory'])->name('product.under.subcategory');

// ------------website login-------
Route::get('/user/login/website', [HomeController::class, 'userLogin'])->name('website.user.login');
Route::get('/User/regestation', [UserController::class, 'UserRegestation'])->name('User.regestation');
Route::post('/User/regestation/store', [UserController::class, 'UserRegestationstore'])->name('User.regestation.store');


// ------ user login + logout view--
Route::post('/User/login', [UserLoginController::class, 'loginView'])->name('user.login.view');
Route::get('/User/logout', [UserLoginController::class, 'logOut'])->name('user.logout');

// ------------------ Socialite login google,facebook,github-----------------

// Google
Route::get('Login/google', [UserLoginController::class, 'redirectToGoogle'])->name('Login.google');
Route::get('Login/google/callback', [UserLoginController::class, 'handleGoogleCallback']);
// facebook
Route::get('Login/facebook', [UserLoginController::class, 'redirectToFacebook'])->name('Login.facebook');
Route::get('Login/facebook/callback', [UserLoginController::class, 'handleFacebookCallback']);
// Github
Route::get('Login/github', [UserLoginController::class, 'redirectTOProvider'])->name('Login.github');
Route::get('Login/github/callback', [UserLoginController::class, 'handleProviderCallback']);


//cerisol
Route::get('/product/crisis/{product_id}', [ProductController::class, 'crisis'])->name('crisis.view');

// featured product
Route::get('/product/featured/slider', [ProductController::class, 'featured_product'])->name('featured.product');


// product single view
Route::get('/product/single/view/{id}', [ProductController::class, 'product_single_view'])->name('product.single.view');
// all product 

Route::get('/all/product/view', [ProductController::class, 'allProduct'])->name('all.product');

// frontend product search
route::get('product/search/view', [ProductController::class, 'productSearchView'])->name('product.search.view');

// ================cart view=======================
Route::get('/cart/view', [CartController::class, 'cartview'])->name('cart.view');
route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/clear-cart', [CartController::class, 'clearCart'])->name('cart.clear');
// card qty update
Route::get('/cart/qty/update/{id}', [CartController::class, 'cartQty_update'])->name('cart.qty.update');
//cart item delete
Route::get('/cart/item/delete/{id}', [CartController::class, 'deleteItem'])->name('cart.item.delete');

// =====================wish List==================
route::get('/wishlist/view', [wishListController::class, 'wishListView'])->name('wishlist.view');
route::get('/Add_to_wishlist/{id}', [wishListController::class, 'add_to_wishlist'])->name('add.to.wishlist');
route::get('/clear_wishlist', [wishListController::class, 'wishlistclear'])->name('clear.wishlist');


// Route::get('/remove-cart', [ProductController::class, 'removeCart'])->name('remove.cart');

// password forget ======
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/', function () {
    return view('website.master');
})->name('website');
Route::get('/', [HomeController::class, 'Home'])->name('manage.home');
Route::group(['prefix' => '/', 'middleware' => 'web_auth'], function () {



    // SSLCOMMERZ payment Start


    Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay.now');
    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);


    //SSLCOMMERZ END
    // ------- cart request-----
    route::post('/check-out', [ProductController::class, 'checkOut'])->name('check.out');
    route::get('/check-out/form', [ProductController::class, 'checkOut_form'])->name('check.out.form');
    route::post('/check-out/form/store', [ProductController::class, 'checkOut_store'])->name('check.out.store');
    route::get('/cash/check-out/form', [ProductController::class, 'cash_checkOut_form'])->name('cash.check.out.form');


    // ---------- customer profile--------

    route::get('customer/profile', [UserLoginController::class, 'customer_profile'])->name('customer.profile');
    route::get('customer/order/list/view/{id}', [UserLoginController::class, 'CustomerOrderList'])->name('customer.order.list.view');

    Route::get('customer/update/info/{id}',[UserLoginController::class, 'customerUpdate'])->name('customer.profile.update');
    Route::post('customer/update/store/{id}',[UserLoginController::class, 'customerUpdateStore'])->name('customer.profile.update.store');

    // order 
    route::get('order/customer',[orderController::class,'requestList'])->name('order.customer');
    route::get('order/customer/details/{id}',[orderController::class,'requestInvoice'])->name('order.customer.details');


    // coupon -------start 
    Route::post('coupon/apply',[CouponController::class, 'couponApply'])->name('coupon.apply');
    route::get('delete/coupon/u',[CouponController::class,'deleteCoupon'])->name('delete.coupon');
    // coupon -------end 

});


Route::get("/form/login", [AdminController::class, 'login_view'])->name('admin.login');
Route::post("/login", [AdminController::class, 'login'])->name('login.view');




// ---------------------all backend Start--------------------

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', function () {
        return view('admin/Dashboard/Dashboard');
    })->name('home');

    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    // Route::match(['get','post'],"/login",[AdminContrwisholler::class,'login'])->name('login.view');
    // Route::match(['get','post'],"/form/login",[AdminController::class,'login']);
    //login route



    // customer list
    Route::get('/customer/view', [CustomerController::class, 'customerView'])->name('customer.view');
    Route::get('/customer/details/{id}', [CustomerController::class, 'customer_single_View'])->name('customer.single.details');
    //

    //product route
    Route::get('/product/view', [ProductController::class, 'product_view'])->name('product.view');
    Route::get('/product/create', [ProductController::class, 'product_create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'product_store'])->name('product.store');
    Route::get('/product/viewdetails/{product_id}', [ProductController::class, 'ProductViewDetails'])->name('product.view.details');
    Route::get('/product/DeleteProduct/{product_id}', [ProductController::class, 'DeleteProduct'])->name('product.delete');
    Route::post('/product/update/{product_id}', [ProductController::class, 'product_update'])->name('product.update');
    Route::get('/product/edit/{product_id}', [ProductController::class, 'product_edit'])->name('product.edit');


    // product category Start
    Route::get('/product/category/create', [CategoryController::class, 'Category'])->name('product.category');
    Route::post('/product/category/store', [CategoryController::class, 'Category_store'])->name('product.category.store');
    Route::get('/product/category/view', [CategoryController::class, 'Category_view'])->name('product.category.view');
    route::post('/product/category/update/{id}', [CategoryController::class, 'category_update'])->name('product.category.update');
    route::get('/product/category/update/view/{id}', [CategoryController::class, 'category_update_view'])->name('product.category.update.view');
    Route::get('Delete/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('category.delete');
// product category end

    //  subCategory start
    Route::get('/product/subCategory/create', [subCategoryController::class, 'subCategoryCreate'])->name('product.subCategory.create');
    Route::post('/product/subCategory/store', [subCategoryController::class, 'subCategoryStore'])->name('product.subCategory.store');
    Route::get('/product/subCategory/view', [subCategoryController::class, 'subCategoryView'])->name('product.subCategory.view');
    Route::get('subcategory/update/form/{id}',[subCategoryController::class,'updateForm'])->name('update.subCategory');
    Route::post('subcategory/update/store/{id}',[subCategoryController::class,'subCategoryUpdate'])->name('update.store.subCategory');
    //  subCategory End


    //  brand Start
    Route::get('brand/create', [BrandController::class, 'BrandCreate'])->name('brand.create');
    Route::post('brand/store', [BrandController::class, 'BrandStore'])->name('brand.store');
    Route::get('brand/view', [BrandController::class, 'BrandView'])->name('brand.view');
    Route::get('brand/edit/{id}', [BrandController::class, 'BrandEditForm'])->name('brand.edit');
    Route::post('brand/edit/store/{id}', [BrandController::class, 'BrandEditStore'])->name('brand.edit.store');
//  brand end


    //cart request view
    Route::get('product/request', [ProductController::class, 'requestList'])->name('request.list');
    Route::get('product/invoice/{id}', [ProductController::class, 'requestInvoice'])->name('request.invoice');


    // product approve and cancel
    Route::get('product/approve/{id}', [ProductController::class, 'productApprove'])->name('product.approve');
    Route::get('product/cancel/{id}', [ProductController::class, 'productCancel'])->name('product.cancel');


    // dashboard------------------
    route::get('dashboard/view', [DashboardController::class, 'dashboardView'])->name('dashboard.view');
    // route::get('create/pdf', [pdfController::class, 'create_pdf'])->name('create.pdf');

    // coupon ----------Start
    route::get('coupon/from', [CouponController::class, 'couponFrom'])->name('coupon.from');
    route::post('coupon/store', [CouponController::class, 'couponStore'])->name('coupon.store');
    route::get('coupon/list', [CouponController::class, 'couponList'])->name('coupon.list');
    route::get('coupon/delete/{id}', [CouponController::class, 'couponDelete'])->name('coupon.delete');
    route::get('coupon/update/form/{id}', [CouponController::class, 'couponUpdateForm'])->name('coupon.update.form');
    route::Post('coupon/update/{id}', [CouponController::class, 'couponUpdate'])->name('coupon.update');
     // coupon ----------end

    //  report generate start

    route::get('product/report', [reportController::class, 'product_report'])->name('product.report');
    //  report generate end

});







