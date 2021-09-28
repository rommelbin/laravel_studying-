<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\NewsController as DefaultNewsController;
use App\Http\Controllers\Category\CategoryController as DefaultCategoryController;
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
    return view('welcome');
});

Route::group(['prefix' => 'default'], function() {
   Route::resource('news', DefaultNewsController::class);
});
Route::group(['prefix' => 'default'], function() {
    Route::resource('category', DefaultCategoryController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
