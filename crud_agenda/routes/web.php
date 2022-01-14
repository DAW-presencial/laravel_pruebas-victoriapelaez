<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('agenda', AgendaController::class)->middleware(['auth']);
//Route::middleware(['auth'])->resource('agenda', AgendaController::class);




