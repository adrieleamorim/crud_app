<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meu-perfil', function () {
    return view('MeuPerfil');
});

Route::get('/sair', function () {
    return view('welcome');
});

Route::get('/cadastrar', function () {
    return view('Cadastrar');
});