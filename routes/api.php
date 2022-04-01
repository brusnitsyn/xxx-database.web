<?php

use App\Http\Controllers\Api\v1\Admin\CategoryController;
use App\Http\Controllers\Api\v1\Admin\ColorController;
use App\Http\Controllers\Api\v1\Admin\ImageController;
use App\Http\Controllers\Api\v1\Admin\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('admin/categories', CategoryController::class);
Route::apiResource('admin/colors', ColorController::class);
Route::apiResource('admin/products', ProductController::class);
Route::apiResource('admin/products/image', ImageController::class);
