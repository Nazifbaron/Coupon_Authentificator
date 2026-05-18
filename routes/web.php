<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recharge', function () {
    return view('recharge');
});

Route::get('/recharge-confirmation', function () {
    return view('recharge-confirmation');
});

Route::get('/confirmation', function () {
    return view('confirmation'); // Créez cette vue
});
