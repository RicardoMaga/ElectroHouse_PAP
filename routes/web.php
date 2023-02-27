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


route::group(['middleware'=>[
    'auth:sanctum',
    'verified',
    

]],function(){



    
 
    Route::get('/comprar', function () {
        return view('comprar');
    })->name('comprar');
    
    
    Route::get('/reservas', function () {
        return view('reservas');
    })->name('reservas');
    
    
   




    });

    Route::get('/produtos', Produtos::class);

    Route::get('/contacto', function () {
        return view('contacto');
    })->name('contacto');


