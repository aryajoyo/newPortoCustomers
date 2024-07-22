<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('About', ['title'=> 'About Us']);
});
Route::get('/', function () {
    return view('home', ['title' => 'CV. MKBU']);
});
Route::get('/layanan', function () {
    return view('layanan', ['title' => 'Layanan']);
});
Route::get('/faq', function () {
    return view('FAQ',['title'=> 'FAQ']);
});
Route::get('/libary', function () {
    return view('Libary',['title'=> 'Libary', 'posts' =>[
        
    ]]);
});
Route::get('/karir', function () {
    return view('Karir',['title'=> 'Karir']);
});
Route::get('/contact', function () {
    return view('Contact',['title'=> 'Contact']);
});
Route::get('/regulasi', function () {
    return view('regulasi',['title'=> 'Regulasi']);
});

