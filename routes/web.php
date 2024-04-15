<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/contato', function () {
    return view('contato');
});
