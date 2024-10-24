<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExchangeRateController;

// Get all exchange rates
Route::get('/exchange-rates', [ExchangeRateController::class, 'getAllExchangeRates']);

// Get a specific exchange rate by currency code
Route::get('/exchange-rates/{currency}', [ExchangeRateController::class, 'getExchangeRateByCurrency']);
