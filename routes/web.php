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
Route::delete('/dettaglio/annuncio/{article}' , [ArticleController::class, 'destroy'])->name('article.delete');

Route::get('/tutti/annunci', [ArticleController::class, 'index'])->name('article.index');

Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accetta/annuncio/{article}', [RevisorController::class,'acceptArticle'])->middleware('isRevisor')->name('revisor.accept_article');
Route::patch('/rifiuta/annuncio/{article}', [RevisorController::class,'rejectArticle'])->middleware('isRevisor')->name('revisor.reject_article');

Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/ricerca/annuncio', [RevisorController::class, 'searchArticles'])->name('article.search');


Route::post('/lingua/{lang}', [RevisorController::class, 'setLocale'])->name('setLocale');