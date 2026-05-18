<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/confirmation', function () {
    return view('confirmation'); // Créez cette vue
});
