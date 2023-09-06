<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/product', [ProductController::class, 'upload'])->name('product.upload');

Route::get('/product{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/product{product}/update', [ProductController::class, 'update'])->name('product.update');

Route::delete('/product{product}/remove', [ProductController::class, 'remove'])->name('product.remove');

Route::get('/product/search', [ProductController::class, 'search'])->name('product.search');