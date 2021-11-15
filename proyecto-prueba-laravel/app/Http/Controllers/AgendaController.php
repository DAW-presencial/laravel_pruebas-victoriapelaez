<?php

namespace App\Http\Controllers;

class AgendaController extends Controller{
    function devolverAgenda(){
        return view('agenda');
    }
}
