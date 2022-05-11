<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MunController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RashifalController;
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
Route::view('','app.index');

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::view('/contact-us', 'contactUs')->name('contact.us');
// Route::get('/news/{news}', [NewsController::class, 'view'])->name('news.view');
// Route::get('/category/{category}', [CategoryController::class, 'view'])->name('category.view');
Route::match(['get', 'post'], '/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::prefix('category')->name('catecory.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::post('/submit', [CategoryController::class, 'submit'])->name('submit');
        Route::post('/update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{category}', [CategoryController::class, 'delete'])->name('delete');
    });

    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/add/{type}', [NewsController::class, 'add'])->name('add');
        Route::get('/list', [NewsController::class, 'list'])->name('list');
        Route::post('/submit/{type}', [NewsController::class, 'submit'])->name('submit');
        Route::get('/delete/{news}', [NewsController::class, 'delete'])->name('delete');
        Route::match(['get', 'post'], '/update/{news}', [NewsController::class, 'update'])->name('update');
    });

    Route::prefix('rasifal')->name('rasifal.')->group(function () {
        Route::match(['get', 'post'], '/add', [RashifalController::class, 'add'])->name('add');
        Route::get('/list', [RashifalController::class, 'list'])->name('list');
        Route::match(['get', 'post'], '/update/{rashifal}', [RashifalController::class, 'update'])->name('update');
    });

    Route::prefix('mun')->name('mun.')->group(function () {
        route::get('', [MunController::class, 'index'])->name('index');
        route::post('add', [MunController::class, 'add'])->name('add');
        route::post('update', [MunController::class, 'update'])->name('update');
        route::get('del', [MunController::class, 'del'])->name('del');

        Route::prefix('candi')->name('candi.')->group(function () {
            Route::get('/add/{mun}/{ward}/{position}', [MunController::class, 'candi_add'])->name('add');
            Route::post('/sumbit', [MunController::class, 'candi_submit'])->name('submit');
            Route::get('/list-mayor/{mun}', [MunController::class, 'mayor_list'])->name('mayor.list');
            Route::get('/list-vice-mayor/{mun}', [MunController::class, 'viceMayor_list'])->name('vice-mayor.list');
            Route::get('/list-head/{mun}/{ward}', [MunController::class, 'head_list'])->name('head.list');
            Route::get('/list-ward/{mun}', [MunController::class, 'ward_list'])->name('ward.list');
            Route::get('/delete/{position}', [MunController::class, 'del_candi'])->name('delete');
        });
    });

    Route::prefix('user')->name('user.')->group(function () {
        Route::match(['get', 'post'], '/add', [AdminController::class, 'add'])->name('add');
        Route::get('/delete/{user}', [AdminController::class, 'delete'])->name('delete');
    });
});
