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
Route::get('/home', function(){
    return view('frontend/layouts/home');
});
Route::get('/addwebinar', function(){
    return view('frontend/layouts/addwebinar');
});

Route::get('/login', function(){
    return view('frontend/layouts/login');
});
Route::get('/dashboard', function(){
    return view('backend/layouts/dashboard');

Auth::routes();
});
Route::resource('webinar', WebinarController::class);
Route::resource('loker', LokerController::class);

