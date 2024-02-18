<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->name('admin-')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/{client}/show', [AdminController::class, 'show'])->name('show');
    Route::get('/showAll', [AdminController::class, 'showAll'])->name('showAll');
    Route::get('/{client}/edit', [AdminController::class, 'edit'])->name('edit');
    Route::put('/{client}', [AdminController::class, 'update'])->name('update');
});

Route::prefix('client')->name('client-')->group(function() {
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::get('/create', [ClientController::class, 'create'])->name('create');
    Route::post('/store', [ClientController::class, 'store'])->name('store');
    Route::get('/show', [ClientController::class, 'show'])->name('show');
    Route::get('/{account}/edit', [ClientController::class, 'edit'])->name('edit');
    Route::put('/{account}', [ClientController::class, 'update'])->name('update');
    Route::get('/{account}/delete', [ClientController::class, 'delete'])->name('delete');
    Route::delete('/{account}', [ClientController::class, 'destroy'])->name('destroy');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
