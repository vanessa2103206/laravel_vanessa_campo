<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Pagina principale con l'elenco di tutti gli articoli
Route::get('/', [ArticleController::class, 'index'])->name('article.index');

// Pagina con il form per inserire i dati e le immagini
Route::get('/articolo/crea', [ArticleController::class, 'create'])->name('article.create');

// Rotta POST che riceve i dati e attiva la validazione di ArticleRequest
Route::post('/articolo/salva', [ArticleController::class, 'store'])->name('article.store');
