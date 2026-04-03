<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio/outsystems', function () {
    return view('portfolio.outsystems');
});

Route::get('/portfolio/tigerdata', function () {
    return view('portfolio.tigerdata');
});

Route::get('/portfolio/laravel', function () {
    return view('portfolio.laravel');
});
