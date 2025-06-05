<?php

use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
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

Route::get('/', [MainHomeController::class, 'home'])->name('home');
Route::get('/product/{product}', [MainHomeController::class, 'showProduct'])->name('product');
// Route::get('/products', [MainHomeController::class, 'products'])->name('products');


Route::get('/products/shampoo', [ProductController::class, 'showShampoo'])->name('products.shampoo');

Route::get('/service-1', [MainHomeController::class, 'service_1'])->name('service_1');
Route::get('/service-2', [MainHomeController::class, 'service_2'])->name('service_2');
Route::get('/service-3', [MainHomeController::class, 'service_3'])->name('service_3');


Route::post('/storeContact', [StoreController::class, 'storeContact'])->name('storeContact');
Route::post('/storeEmail', [StoreController::class, 'storeEmail'])->name('storeEmail');
