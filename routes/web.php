<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('general-course', function () {
    return view('general-course');
});
Route::get('tea-course', function () {
    return view('tea-course');
});
Route::get('matcha-course', function () {
    return view('matcha-course');
});
Route::get('about-us', function () {
    return view('about-us');
});
Route::get('cold-brew-berry-vai', function () {
    return view('cold-brew-berry-vai');
});
Route::get('coffee-tropical', function () {
    return view('coffee-tropical');
});
Route::get('chuoi-nuong-lac-thom', function () {
    return view('chuoi-nuong-lac-thom');
});
Route::get('coffee-matcha-fusion', function () {
    return view('coffee-matcha-fusion');
});
