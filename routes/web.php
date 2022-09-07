<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users');
});

Route::get('users', function () {
})->name('users');