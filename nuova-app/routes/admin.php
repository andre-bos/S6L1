<?php
use Illuminate\Support\Facades\Route;

Route::get('/testAdmin{id}', function () {
    return 'Hello Admin!';
});

Route::get('/create', function () {
    return '<h2>Create admin!</h2>';
});
