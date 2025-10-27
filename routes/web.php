<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/bore-pile-hydraulic', [PageController::class, 'borePileHydraulic'])->name('bore-pile-hydraulic');
Route::get('/jasa-bore-pile-manual', [PageController::class, 'borePileManual'])->name('bore-pile-manual');
Route::get('/bore-pile-mini-crane', [PageController::class, 'borePileMiniCrane'])->name('bore-pile-mini-crane');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Routes for WooCommerce Products
Route::get('/area-layanan', [ProductController::class, 'index'])->name('products.index');
Route::get('/area-layanan/{slug}', [ProductController::class, 'show'])->name('products.show');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
