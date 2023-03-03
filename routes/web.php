<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Produtos;


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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware'=>[
    'auth:sanctum',
    'verified',
    'accessrole',
    
]],function(){

    Route::get('/produtos', function () {
        return view('produtos');
    })->name('produtos');

    Route::get('/contacto', function () {
        return view('contacto');
    })->name('contacto');

    Route::get('/comprar', function () {
        return view('comprar');
    })->name('comprar');
    
    
    Route::get('/reservas', function () {
        return view('reservas');
    })->name('reservas');
    
    
});
  


