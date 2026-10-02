<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $info = "Testo Vario";

    return view('home', compact("info"));
})->name("home");


Route::get('/profilo', function () {
    return view('profilo');
})->name("profilo");

Route::get('/carrello', function () {
    return view('carrello');
})->name("carrello");