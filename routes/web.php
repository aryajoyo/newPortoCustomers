<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('About');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/faq', function () {
    return view('FAQ');
});
Route::get('/libary', function () {
    return view('Libary');
});
Route::get('/karir', function () {
    return view('Karir');
});
Route::get('/contact', function () {
    return view('Contact');
});
