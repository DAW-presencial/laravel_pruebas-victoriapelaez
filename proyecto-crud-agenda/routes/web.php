<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('home');
})->name('home');


require __DIR__ . '/auth.php';

Route::resource('/contactos', ContactoController::class)
    ->middleware(['auth'])
    ->parameter('contactos', 'contacto');
