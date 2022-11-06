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
    return view('index');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about_us');
})->name('about_us');

Route::get('/contact', function () {
    return view('contact_us');
})->name('contact_us');


Route::get('/privacy_policy', function () {
    return view('privacy_policy');
})->name('privacy_policy');

Route::get('/refund_return_policy', function () {
    return view('refund_return_policy');
})->name('refund_return_policy');
