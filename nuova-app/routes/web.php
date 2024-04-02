<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Rotta predefinita di Laravel
Route::get('/', function () {
    return view('welcome');
});

// Rotta personalizzata
Route::get('/greeting', function () {
    return 'Hello world!';
});
/* Route::post('/', function () {
    return view('welcome');
});

Route::put('/', function () {
    return view('welcome');
});

Route::patch('/', function () {
    return view('welcome');
});

Route::delete('/', function () {
    return view('welcome');
}); */

// Rotta per il redirect
Route::redirect('/greeting', '/');

// Rotta che restituisce API

Route::get('/usersAPI', function () {
    $users = [];

    $u = new stdClass();

    $u->nome = 'Mario';
    $u->cognome = 'Rima';
    $u->citta = 'San Donato';
    array_push($users, $u);
    return $users;
});

