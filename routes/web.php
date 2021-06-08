<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/gereremploye', function () {
    return view('pages.gereremploye');
});

Route::get('/reglementsalaire', function () {
    return view('pages.reglementsalaire');
});

Route::resource('employes', 'App\Http\Controllers\EmployeController');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
