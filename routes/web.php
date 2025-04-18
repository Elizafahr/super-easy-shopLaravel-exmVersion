<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});


Route::get('/catalog', [ProductController::class, 'catalog'])->name('catalog');
Route::get('/product/{productId}', [ProductController::class, 'product']);
Route::get('/orders', [ProductController::class, 'orders']);
Route::post('/add', [ProductController::class, 'addToOrder'])->name('add');
Route::get('/orders', [ProductController::class, 'showOrders'])->name('orders');