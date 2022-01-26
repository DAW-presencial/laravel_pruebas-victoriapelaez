<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/agenda', AgendaController::class)->middleware(['auth'])->except(['show'])->parameters(['agenda' => 'contacto']);
//Route::middleware(['auth'])->resource('agenda', AgendaController::class);


//para devolver a una pagina cuando haya un error usar el provider routeService para hacer un fallback a la ruta que hayamos llamado
//home
Route::fallback('/dashboard');


