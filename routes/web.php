<?php

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
    return view('welcome');
});
Route::get('/hello_world_page', function () {
    return 'hello world page';
});
Route::get('/another_page', function () {
    return 'another_page';
});
Route::get('/I_know_how_use_blades', function () {
    return 'ohhh yeaaa';
});
