<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MunController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RashifalController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('category-list', [CategoryController::class, 'apiList']);
Route::get('news-list', [NewsController::class, 'apiList']);
Route::get('news/{id}', [NewsController::class, 'apiViewNews']);
Route::get('news-latest', [NewsController::class, 'apiListLatest']);
Route::get('rashifal-list', [RashifalController::class, 'apiListRashifal']);
Route::get('mun-list', [MunController::class, 'apiMunList']);
Route::get('candi-list', [MunController::class, 'apiCandiList']);
Route::post('vote-update/{id}', [MunController::class, 'apiVoteUpdate']);
Route::get('get-candi/{id}', [MunController::class, 'apiGetCandi']);
