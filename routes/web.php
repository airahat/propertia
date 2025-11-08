<?php

use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\SalesController;
use App\Models\Properties;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.dashboard');
});
Route::get('/sales', function () {
    return view('admin.pages.sales');
});
Route::get('/properties', [PropertiesController::class, 'index'])->name('properties.index');
Route::get('/properties/create',[PropertiesController::class, 'create'])->name('properties.create');
Route::post('/properties/store',[PropertiesController::class, 'store'])->name('properties.store');
Route::get('/properties/sell', [SalesController::class, 'create'])->name('sales.create');
Route::get('/property/{id}/details', [PropertiesController::class, 'fetchDetails']);
Route::delete('/properties/{id}',[PropertiesController::class, 'destroy'])->name('properties.destroy');
Route::get('/properties/{id}', [PropertiesController::class, 'show'])->name('properties.show');
Route::get('/properties/{id}/edit', [PropertiesController::class, 'edit'])->name('properties.edit');


Route::post('/sales/store',[SalesController::class, 'store'])->name('sales.store');




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


