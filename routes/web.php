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

Route::get('/tugas', function () {
    return view('amel/tugas');
});

Route::get('page/{page?}', function ($hal = 2) {
    return "Halaman <b>$hal</b>";
});

Route::get('user/{name?}', function ($nama = "Hello world!") {
    return "<b>$nama</b>";
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

    if ($makanan && $minuman && $cemilan != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman <br>
                Anda memesan Cemilan = $cemilan";
    } else if ($makanan && $minuman != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman";
    } else if ($makanan || $minuman != null) {
        return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
    } else {
        return "Anda tidak memesan silahkan pulang";
    }

});
