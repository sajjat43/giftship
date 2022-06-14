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

Route::post('user/create', [apiUserController::class, 'userCreate']);
Route::get('user/view', [apiUserController::class, 'userView']);

// -----------for product

Route::post('/product/create', [apiProductController::class, 'productCreate']);
Route::post('category/create',[apiProductController::class,'createCategory']);
