<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function(){
    setcookie("FirstCookie", 0);
    if (isset($_COOKIE['FirstCookie'])) {
        setcookie("FirstCookie", ++$_COOKIE["FirstCookie"]);
        echo "Visitas de la página: " . $_COOKIE['FirstCookie'];
        }
    else{
        echo "Bienvenido a esta página";
        }

}
)
