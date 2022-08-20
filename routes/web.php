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


Route::get('/Home.blade.php', function () {
    return view('Home');
});
Route::get('/body.blade.php', function () {
    return view('body');
});
Route::get('/ourwork.blade.php', function () {
    return view('ourwork');
});
Route::get('/knowmore.blade.php', function () {
    return view('knowmore');
});

