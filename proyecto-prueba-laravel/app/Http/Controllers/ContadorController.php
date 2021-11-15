<?php


namespace App\Http\Controllers;

class ContadorController extends Controller{
    function devolverVista(){
        return view('visitas');
    }
}

/*function __invoke(){
return view('visitas');}*/
