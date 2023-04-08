<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/expenses', [App\Http\Controllers\ExpenseController::class, 'index'])->name('expenses.index');
Route::get('/expenses/create', [App\Http\Controllers\ExpenseController::class, 'create'])->name('expenses.create');
Route::post('/expenses', [App\Http\Controllers\ExpenseController::class, 'store'])->name('expenses.store');
