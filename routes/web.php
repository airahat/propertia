<?php

use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.dashboard');
});
Route::get('/sales', function () {
    return view('admin.pages.sales');
});
Route::get('/properties', [PropertiesController::class, 'index'])->name('properties.index');

// Route::get('/users', [UserController::class, 'index'])->name("users.index");






Route::get('/properties/create', function () {
    return view('admin.pages.properties.create');
});
Route::get('/properties/sell', function () {
    return view('admin.pages.properties.sell');
});
Route::get('/projects/create', function () {
    return view('admin.pages.projects.create');
});
Route::get('/projects', function () {
    return view('admin.pages.projects.index');
});
Route::get('/rental', function () {
    return view('admin.pages.rental');
});
Route::get('/rent', function () {
    return view('admin.pages.rent');
});
Route::get('/messages', function () {
    return view('admin.pages.messages.index');
});
Route::get('/messages/show', function () {
    return view('admin.pages.messages.show');
});
Route::get('/login', function () {
    return view('authentication');
});
Route::get('/employees', function () {
    return view('employees');
});
Route::get('/users', function () {
    return view('admin.pages.users.index');
});
Route::get('/users/create', function () {
    return view('admin.pages.users.create');
});
Route::get('/employees/create', function () {
    return view('create-employee');
});


