<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.dashboard');
});
Route::get('/sales', function () {
    return view('admin.pages.sales');
});
Route::get('/properties', function () {
    return view('admin.pages.properties.properties');
});
Route::get('/properties/create', function () {
    return view('admin.pages.properties.create');
});
Route::get('/properties/sell', function () {
    return view('admin.pages.properties.sell');
});
Route::get('/projects/create', function () {
    return view('admin.pages.projects.create');
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
Route::get('/login', function () {
    return view('authentication');
});


