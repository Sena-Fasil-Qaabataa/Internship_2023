<?php

use App\Http\Controllers\ProductController;
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
Route::get('/welcome', function () {
    return view('Pages.welcome');
})->name('welcome');

Route::get('/base', function () {
    return view('layouts.base');
})->name('base');
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
Route::get('/index', function () {
    return view('products.index');
})->name('index');
Route::get('/create', function () {
    return view('products.create');
})->name('create');
Route::get('/edit', function () {
    return view('products.edit');
})->name('edit');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
 Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product',[ProductController::class,'store'])->name('product.store');
Route::get('/product/{product}/edit',[ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update',[ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy',[ProductController::class, 'destroy'])->name('product.destroy');
