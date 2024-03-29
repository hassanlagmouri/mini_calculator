<?php

use App\Http\Controllers\CalculatorController;
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

Route::get('/', [CalculatorController::class, 'index'])->name('index');

Route::get('/calculator', [CalculatorController::class, 'calculator'])->name('calculator');

Route::post('/calculator', [CalculatorController::class, 'operation'])->name('operation');