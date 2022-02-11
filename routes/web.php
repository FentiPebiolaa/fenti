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
    return view ('Beranda', [
          "title"=> "Beranda"
     ]);
});

Route::get('/masuk', function () {
     return view ('masuk',[
          "title"=> "masuk"
     ]);
});

Route::get('/daftar', function () {
     return view ('daftar', [
          "title"=> "Daftar"
     ]);
});

Route::get('/about', function () {
     return view ('about', [
          "title"=> "about"
     ]);
});
Route::get('/admin', function () {
     return view ('index', [
          "title"=> "admin"
     ]);
});
