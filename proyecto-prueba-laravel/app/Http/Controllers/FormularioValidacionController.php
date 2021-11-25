<?php
namespace  App\Http\Controllers;

class FormularioValidacionController extends Controller{
    function devolverFormulario(){
        return view('formulario-validacion');
    }
}
