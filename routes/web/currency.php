<?php

use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::get('/', CurrencyController::class)->name('index');

Route::group(['prefix' => 'coins'], function () {

});
