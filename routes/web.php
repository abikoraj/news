<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('catecory.index');
});

Route::prefix('category')->name('catecory.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::post('/submit', [CategoryController::class, 'submit'])->name('submit');
    Route::post('/update/{category}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{category}', [CategoryController::class, 'delete'])->name('delete');
});

Route::prefix('news')->name('news.')->group(function () {
    Route::get('/add', [NewsController::class, 'add'])->name('add');
    Route::get('/list', [NewsController::class, 'list'])->name('list');
    Route::post('/submit', [NewsController::class, 'submit'])->name('submit');
    Route::get('/delete/{news}', [NewsController::class, 'delete'])->name('delete');
    Route::match(['get', 'post'], '/update/{news}', [NewsController::class, 'update'])->name('update');
});
