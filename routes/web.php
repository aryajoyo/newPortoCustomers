<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('About', ['title' => 'About Us']);
});
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/layanan', function () {
    return view('layanan', ['title' => 'Layanan']);
});
Route::get('/faq', function () {
    return view('FAQ', ['title' => 'FAQ']);
});
Route::get('/libary', function () {
    return view('Libary', ['title' => 'Libary']);
});
Route::get('/karir', function () {
    return view('Karir', ['title' => 'Karir']);
});
Route::get('/contact', function () {
    return view('Contact', ['title' => 'Contact']);
});
Route::get('/regulasi', function () {
    return view('regulasi', ['title' => 'Regulasi']);
});

Route::get('/admin', function () {
    return view('admin.admin-home');
});

Route::get('/admin/faq', function () {
    return view('admin.admin-faq');
});
Route::get('/admin/faq/insert', function () {
    return view('admin.admin-faq-insert');
});
