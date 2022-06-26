<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/produto/{product:slug}', [ProductController::class, 'show'])->name('product');

Route::get('/admin/produtos', [AdminProductController::class, 'index'])->name('admin.products');
Route::get('/admin/produtos/criar', [AdminProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/produtos', [AdminProductController::class, 'store'])->name('admin.product.store');

Route::get('/admin/produtos/{product}/editar', [AdminProductController::class, 'edit'])->name('admin.product.edit');
Route::put('/admin/produtos/{product}', [AdminProductController::class, 'update'])->name('admin.product.update');

// Route::get('/admin/produtos/{product}/deletar', [AdminProductController::class, 'destroy'])->name('admin.product.destroy');
Route::get('/admin/produtos/{product}/deletar-imagem', [AdminProductController::class, 'destroyImage'])->name('admin.product.destroyImage');
Route::delete('/admin/produtos/{product}', [AdminProductController::class, 'destroy'])->name('admin.product.destroy');
