<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

Route::get('/', [PublicController::class, 'home'])->name('welcome');
Route::get('/crea', [ArticleController::class, 'create'])->middleware('auth')->name('create');
Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

Route::get('/dettaglio/annuncio/{article}', [ArticleController::class, 'show'])->middleware('auth')->name('article.show');

Route::get('/tutti/annunci', [ArticleController::class, 'index'])->name('article.index');

Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accetta/annuncio/{article}', [RevisorController::class,'acceptArticle'])->name('revisor.accept_article');
Route::patch('/rifiuta/annuncio/{article}', [RevisorController::class,'rejectArticle'])->name('revisor.reject_article');