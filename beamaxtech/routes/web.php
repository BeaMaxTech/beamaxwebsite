<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/staff', [App\Http\Controllers\HomeController::class, 'index'])->name('staff');
///staff/add_student
Route::get('/staff/add_student', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/staff/add_student', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/staff/students', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');

Route::get('/staff/add_payment/{id}', [App\Http\Controllers\TransactionController::class, 'create'])->name('transaction.create');
Route::post('/staff/add_payment/{id}', [App\Http\Controllers\TransactionController::class, 'store'])->name('transaction.store');


Route::get('/student/transaction/{id}', [App\Http\Controllers\UserController::class, 'transactions'])->name('user.transactions');

Route::get('/expenses', [App\Http\Controllers\TransactionController::class, 'expenses'])->name('expenses');
Route::get('/expenses/add', [App\Http\Controllers\TransactionController::class, 'creatExpenses'])->name('creatExpenses');
Route::post('/expenses/add', [App\Http\Controllers\TransactionController::class, 'addExpenses'])->name('addExpenses');

