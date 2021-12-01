<?php

use App\Http\Controllers\TurismoController;
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

Route::prefix('turismo')->group(function(){
    Route::get('/', [TurismoController::class, 'index'] )->name('turismo.index');
    Route::get('/create', [TurismoController::class, 'create'] )->name('turismo.create');
    Route::post('/', [TurismoController::class, 'store'] )->name('turismo.store');
    Route::get('/{id}/edit', [TurismoController::class, 'edit'] )->where('id', '[0-9]+')->name('turismo.edit');
    Route::put('/{id}', [TurismoController::class, 'update'] )->where('id', '[0-9]+')->name('turismo.update');
    Route::delete('/{id}', [TurismoController::class, 'destroy'] )->where('id', '[0-9]+')->name('turismo.destroy');
});


Route::fallback(function() {
    return "Erro!!";
});