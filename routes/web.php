<?php

use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/category-action/{id}', [CategoryController::class, 'index'])->name('category.action');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/products', function () {
    return view('products', ['product' => 'panci']);
});
