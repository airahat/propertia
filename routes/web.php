<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.dashboard');
});
Route::get('/properties', function () {
    return view('admin.pages.properties');
});
Route::get('/rental', function () {
    return view('admin.pages.rental');
});
Route::get('/rent', function () {
    return view('admin.pages.rent');
});
Route::get('/messages', function () {
    return view('admin.pages.messages');
});


