<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SiteController;
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

Route::get('/service/{id}', [ SiteController::class, 'index' ]);
Route::get("/clients", [ ClientController::class, 'index' ])->name('clients.index');
Route::get("/clients/create", [ ClientController::class, 'create' ])->name('clients.create');
Route::get("/clients/{id}", [ ClientController::class, 'show' ])->name('clients.show');
Route::get("/clients/{id}/edit",[ ClientController::class, 'edit' ])->name('clients.edit');
Route::get("/clients/{id}/destroy", [ ClientController::class, 'destroy' ])->name('clients.destroy');

Route::get("/products", [ ProductsController::class, 'index' ])->name('products.index');
Route::get("/products/{id}", [ ProductsController::class, 'show' ])->name('products.show');

Route::post('/clients', [ ClientController::class, 'store' ])->name('clients.store');
Route::put("/clients/{id}/update", [ ClientController::class, 'update' ])->name('clients.update');
