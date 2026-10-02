<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $info = "Testo Vario";

    return view('home', compact("info"));
});


Route::get('/profilo', function () {
    return view('profilo');
});

Route::get('/carrello', function () {
    return view('carrello');
});