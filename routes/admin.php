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


Route::get('/admintest2/{id}', function ($id) {
    return "welcome admin rout".$id;
})->name("a");
Route::get('/admintest3/{id?}', function () {
    return "welcome rout0e string";
})->name("b");

