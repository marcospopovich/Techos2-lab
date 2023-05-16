<?php

use Illuminate\Support\Facades\Route;

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

Route::any('/', function () {
    return view('inicio');
});
Route::any('/boletas', function () {
    return view('boletas');
});
Route::any('/reportes', function () {
    return view('reportes');
});
Route::any('/usuarios', function () {
    return view('usuarios');
});
Route::any('/dash', function () {
    return view('dash');
});
