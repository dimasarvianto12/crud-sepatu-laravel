<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepatuController;

Route::get('/', function () {
    return redirect('/sepatu');
});

Route::resource('sepatu', SepatuController::class);