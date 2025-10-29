<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layout.master');
});
Route::get('/about', function () {
    return view('admin.pages.about');
});
Route::get('/contact', function () {
    return view('admin.pages.contact');
});
