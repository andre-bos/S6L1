<?php

use Illuminate\Support\Facades\Route;

$u = new stdClass();

$users = [];

$u->id = 1;
$u->fullname = 'Mario Rossi';
$u->username = 'mariomario';
$u->email = 'example@example.com';
$u->password = 'pass00';

array_push($users, $u);

$g = new stdClass();

$g->id = 2;
$g->fullname = 'Giuseppe Verdi';
$g->username = 'Verdi55';
$g->email = 'example@example.com';
$g->password = 'pass00005';

array_push($users, $g);

Route::get('/users', function () use ($users) {
return view('users', ['users' => $users]);
});

Route::get('/users/create', function () {
    return view('create');
});

Route::get('/users/{id}', function (int $id) use ($users) {
    $user = array_filter($users, fn($user) => $user->id === $id);
    return view('detail', ['user' => $user]);
});

Route::get('/users/{id}/update', function (int $id) {
    return view('update');
});

Route::get('/users/{id}/delete', function (int $id) {
    return view('delete');
});
