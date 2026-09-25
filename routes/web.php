<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articolo/crea', [ArticleController::class, 'create'])->name('article.create');
Route::post('/articolo/salva', [ArticleController::class, 'store'])->name('article.store');
