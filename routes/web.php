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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/gereremploye', function () {
    return view('pages.gereremploye');
});

Route::get('/salaire', function () {
    return view('pages.salaire');
});

Route::get('/espaceemploye', function () {
    return view('pages.espaceemploye');
});

// Route::get('/create', [
//     'uses' => 'RequetesController@create'
// ]);

// Route::get('/requetes', function () {
    // return view('pages.requetes');
// });

Route::resource('employes', 'App\Http\Controllers\EmployeController');
Route::resource('groupes', 'App\Http\Controllers\GroupeController');
Route::resource('grades', 'App\Http\Controllers\GradeController');
Route::resource('services', 'App\Http\Controllers\ServiceController');
Route::resource('primes', 'App\Http\Controllers\PrimeController');
Route::resource('retenues', 'App\Http\Controllers\RetenueController');
Route::resource('salaires', 'App\Http\Controllers\SalaireController');
Route::resource('requetes', 'App\Http\Controllers\RequetesController');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
