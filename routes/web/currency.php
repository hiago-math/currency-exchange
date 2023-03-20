<?php

use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "APP cureency";
})->name('index');
Route::get('/currency', CurrencyController::class)->name('currency');

Route::group(['prefix' => 'coins'], function () {

});
