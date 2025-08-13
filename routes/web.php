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
Route::get('/products/lotion', [ProductController::class, 'showlotion'])->name('products.lotion');
Route::get('/products/massage_oil', [ProductController::class, 'showmassage_oil'])->name('products.massage_oil');
Route::get('/products/shower_scrub', [ProductController::class, 'showshower_scrub'])->name('products.shower_scrub');
Route::get('/products/shower_gel', [ProductController::class, 'showshower_gel'])->name('products.shower_gel');
Route::get('/products/mask', [ProductController::class, 'showmask'])->name('products.mask');
Route::get('/products/moroccan_soap', [ProductController::class, 'showmoroccan_soap'])->name('products.moroccan_soap');
Route::get('/products/conditioner', [ProductController::class, 'showconditioner'])->name('products.conditioner');
Route::get('/products/serum', [ProductController::class, 'showserum'])->name('products.serum');

Route::get('/products/baby_bath', [ProductController::class, 'showbaby_bath'])->name('products.baby_bath');
Route::get('/products/baby_cologne', [ProductController::class, 'showbaby_cologne'])->name('products.baby_cologne');
Route::get('/products/baby_lotion', [ProductController::class, 'showbaby_lotion'])->name('products.baby_lotion');
Route::get('/products/baby_oil', [ProductController::class, 'showbaby_oil'])->name('products.baby_oil');
Route::get('/products/baby_shampoo', [ProductController::class, 'showbaby_shampoo'])->name('products.baby_shampoo');

Route::get('/Private-Label-Manufacturing-service', [MainHomeController::class, 'service_1'])->name('service_1');
Route::get('/Beauty-Kits-service', [MainHomeController::class, 'service_2'])->name('service_2');
Route::get('/Exporting-and-Delivery-Service', [MainHomeController::class, 'service_3'])->name('service_3');


Route::post('/storeContact', [StoreController::class, 'storeContact'])->name('storeContact');
Route::post('/storeEmail', [StoreController::class, 'storeEmail'])->name('storeEmail');


// You can keep this in web.php for simplicity now
Route::get('/api/products', [ProductController::class, 'getByType']);