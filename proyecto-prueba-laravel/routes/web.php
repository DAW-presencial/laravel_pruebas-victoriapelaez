<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContadorController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\FormularioValidacionController;


Route::get('/', function () {
return view('welcome');
});
Route::get('/visitas', function(){
    return view('visitas');
});
Route::get('/visitasController',[ContadorController::class,'devolverVista']);
/*Route::get('/visitasController',ContadorController::class);*/
/*Route::get('/visitasController{name}',[ContadorController::class,'devolverVista']);*/

Route::get('/agenda',[AgendaController::class,'devolverAgenda']);

Route::get('/welcome_viki', function(){
    return view('welcome_viki');
});
Route::get('/formulario-validacion',[FormularioValidacionController::class,'devolverFormulario']);

