<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContadorController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\FormularioValidacionController;

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

//poniendo el middelware auth ponemos un capa intermedia donde obligamos al usuario a logearse
Route::middleware('auth')->get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

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
Route::get('/{lang}/formulario-validacion',[FormularioValidacionController::class,'devolverFormulario']);
Route::post('/formulario-validacion',[FormularioValidacionController::class,'devolverFormulario']);
