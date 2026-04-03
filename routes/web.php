<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/how-i-think', function () {
    return view('how-i-think');
});

Route::get('/portfolio', function () {
    return view('portfolio.index');
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
