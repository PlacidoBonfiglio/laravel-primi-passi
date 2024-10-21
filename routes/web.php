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

// Creo una route che mi porti a visualizzare "home.blade.php"
Route::get('/home', function () {

    // Creo una lista che andrò a chiamare dinamicamente su "home.blade.php"
    $list = [
        "oggetto home 1",
        "oggetto home 2",
        "oggetto home 3",
        "oggetto home 4",
        "oggetto home 5",
        "oggetto home 6",
        "oggetto home 7",
        "oggetto home 8",
    ];

    return view('home',
    [
        // Prendo la lista creata appena sopra e la rinomino
        "homeList" => $list,
    ]
);
});
