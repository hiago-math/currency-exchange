<?php

use App\Http\Controllers\ExchangeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'exchange'], function () {
    Route::post('/', [ExchangeController::class, 'enterExchangeProccess'])->name('enter_exchange');
});
