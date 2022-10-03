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
    $title = 'Home';
    return view('home', ['title' => $title]);
});

Route::get('/about-us', function () {
    $title = 'About Us';
    return view('aboutus', ['title' => $title]);
});

Route::get('/faq', function () {
    $title = 'Faq';
    return view('faq', ['title' => $title]);
});