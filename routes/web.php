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

Route::get('/coba', function(){
    echo "<h1>Yeayy Berhasil!!</h1>";
})->middleware('middleware1');

Route::get('/home', function(){
    echo "<h1>Token Salah</h1>";
});