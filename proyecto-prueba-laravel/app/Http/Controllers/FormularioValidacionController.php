<?php
namespace  App\Http\Controllers;

class FormularioValidacionController extends Controller{
    function devolverFormulario($locale){
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        return view('formulario-validacion');
    }
}
