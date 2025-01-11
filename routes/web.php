<?php

use Illuminate\Support\Facades\Route;

Route::get('hello', function () {
    return view('welcome');
});

Route::get('project', function () {
    return view('epiProject');
});

