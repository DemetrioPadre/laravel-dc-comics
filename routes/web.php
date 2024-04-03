<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', function () {
  return view('home');
})->name('home');



//LETTURA
// Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');


// //CREAZIONE
// Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
// Route::post('/comics/', [ComicController::class, 'store'])->name('comics.store');

// //MODIFICA
// Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
// Route::patch('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

Route::resource('comics', ComicController::class);
