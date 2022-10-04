<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\apiController;
use App\Http\Controllers\API\apiProductController;
use App\Http\Controllers\API\apiUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// ---------for user data
Route::post('/User/login', [apiUserController::class, 'loginView']);

Route::post('user/create', [apiUserController::class, 'userCreate']);
Route::get('user/view', [apiUserController::class, 'userView']);

// -----------for product

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::get('/User/logout', [apiUserController::class, 'logOut']);
   
Route::post('/product/create', [apiProductController::class, 'productCreate']);
Route::get('product/view',[apiProductController::class,'viewProduct']);
// ----category 
Route::post('category/create',[apiProductController::class,'createCategory']);
Route::get('category/view',[apiProductController::class,'viewCategory']);
//subCategory-------

Route::post('sub/category/create',[apiProductController::class,'subcreateSubCategory']);
Route::get('sub/category/view',[apiProductController::class,'viewSubCategory']);
Route::put('sub/category/update/{id}',[apiProductController::class,'updateSubCategory']);

// All brand
Route::post('brand/create', [apiProductController::class, 'BrandCreate'])->name('brand.create');
Route::get('brand/view', [apiProductController::class, 'BrandView'])->name('brand.store');

});