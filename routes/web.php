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

Route::get('/', function () {
    return view('layouts.base');
})->name('base');

Route::get('/mvc', function () {
    return view('Pages.mvc');
})->name('mvc');
Route::get('/photo', function () {
    return view('Pages.photo');
})->name('photo');
Route::get('/home', function () {
    return view('Pages.home');
})->name('home');
Route::get('/about', function () {
    return view('Pages.About');
})->name('About');
Route::get('/contact', function () {
    return view('Pages.contact');
})->name('contact');

Route::get('/wel', function () {
    return view('Pages.wel');
})->name('wel');
