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
Route::get('/p', function () {
    return view('dashboardHome');
});
Route::get('/a', function () {
    return view('dashboardSiswa');
});
Route::get('/g', function () {
    return view('dashboardGuru');
});
