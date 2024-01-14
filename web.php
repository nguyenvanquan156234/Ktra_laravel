<?php

use App\Http\Controllers\BookController;
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
    return view('welcome');
});
Route::get('books/create', function () {
    return view('create');
});
Route::post('books/store', [BookController::class, 'store'])->name('books.store');
Route::resource('books', BookController::class);
Route::get('books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::post('books/{id}/update', [BookController::class, 'update'])->name('books.update');
Route::delete('books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/search', [BookController::class, 'search']);


