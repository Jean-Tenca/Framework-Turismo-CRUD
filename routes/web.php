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
});


Route::fallback(function() {
    return "Erro!!";
});