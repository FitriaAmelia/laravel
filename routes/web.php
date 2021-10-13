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

Route::get('/pembuka', function () {
    return view('amel/pembuka');
});

Route::get('/biodata', function () {
    return view('amel/biodata');
});

Route::get('/sahabat', function () {
    return view('amel/sahabat');
});

Route::get('/motivasi', function () {
    return view('amel/motivasi');
});

Route::get('/mimpi', function () {
    return view('amel/mimpi');
});
