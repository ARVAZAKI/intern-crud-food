<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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
//dashboard
Route::get('/',[ProductController::class, "index"]);
//create
Route::get('/tambah-product',[ProductController::class, "addProduct"]);
Route::post('/tambah-product',[ProductController::class, "postProduct"]);
//delete
route::get('/delete-product/${id}', [ProductController::class, "deleteProduct"])->name('deleteProduct');
//edit
route::get('/edit-product/${id}',[ProductController::class, "editProduct"])->name("editProduct");
route::post('/edit-product/${id}',[ProductController::class, "updateProduct"])->name("updateProduct");
//detail
route::get('/detail-product/${id}',[ProductController::class, "detailProduct"])->name("detailProduct");


