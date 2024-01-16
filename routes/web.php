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

Route::get('/', function () {
    echo "esta es la pagina god";
    return view('welcome');
});

//estatica (::) , de instancia de clase (->)

Route::get('/venida', function () {
    echo "pagina venida";
    return view('welcome');
})->name('venida');

Route::get('/asta', function() {
    $msj = "Mielda loco el diablo";
    return view('asta',['msj' => $msj, 'num' => 27]);
});