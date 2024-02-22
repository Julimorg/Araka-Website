<?php

use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Url;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// index page
Route::get('/', function () {
    return view('index');
});
// Homepage page
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/homepagetest', function () {
    return view('homepage_testing');
});