<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DatabseExchange;

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
})->name('main');

//Store New Loan
Route::post('/transfered',[DatabseExchange::class,'submit'])->name('exchange');

//Store New Loan
Route::post('/added',[DatabseExchange::class,'addInput1'])->name('adding');

//View Item List
Route::get('/added', [DatabseExchange::class,'addInput1'])->name('viewItem');