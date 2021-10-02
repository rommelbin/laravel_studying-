<?php
use \App\Http\Controllers\SocialLoginController;
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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/vk/start', [SocialLoginController::class, 'start'])
        ->name('vk.start');
    Route::get('/vk/callback', [SocialLoginController::class, 'callback'])
        ->name('vk.callback');
    Route::get('/fb/start', [SocialLoginController::class, 'start'])
        ->name('fb.start');
    Route::get('/fb/callback', [SocialLoginController::class, 'callback'])
        ->name('fb.callback');
});
Route::get('/parser', [\App\Http\Controllers\Admin\ParserController::class, 'index']);
