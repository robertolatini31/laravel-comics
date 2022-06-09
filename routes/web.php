<?php

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
    $books = config('db.books');
    //dd($books);
    return view('home', compact('books'));
})->name('home');

Route::get('/characters', function () {
    $books = config('db.books');
    //dd($books);
    return view('characters', compact('books'));
})->name('characters');


