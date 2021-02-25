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
Route::get('/about', function () {
    return view('Zhomart Personal_files/about');
});
Route::get('/contact', function () {
    return view('Zhomart Personal_files/contact');
});
Route::get('/elements', function () {
    return view('Zhomart Personal_files/elements');
});

Route::get('/index', function () {
    return view('Zhomart Personal_files/index');
});
Route::get('/mail', function () {
    return view('Zhomart Personal_files/mail');
});
