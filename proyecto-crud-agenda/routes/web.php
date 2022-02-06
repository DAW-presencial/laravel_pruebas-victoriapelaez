<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Controller;
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

Route::get('/set_language/{lang}', [Controller::class, 'set_language'])->name('set_language');

Route::fallback(function () {
    return view('/');
});
