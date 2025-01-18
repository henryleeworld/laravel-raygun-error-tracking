<?php

use Illuminate\Support\Facades\Route;

Route::get('/debug', function () {
    throw new Exception('My first Raygun error!');
});
