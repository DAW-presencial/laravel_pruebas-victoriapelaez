@include('layouts.head')
@include('layouts.navigation')
<div class="container">
    <h1 class="header m-5 text-uppercase text-center">@lang($contacto->nombre . " " . $contacto->apellido)</h1>
    <p class="text-uppercase text-success font-weight-bold text-center">@lang('Id')</p>
    <p class="font-italic text-center">{{$contacto->id}}</p>
    <p class="text-uppercase text-success font-weight-bold text-center ">@lang('Teléfono')</p>
    <p class="font-italic text-center">{{$contacto->telefono}}</p>
    <p class="text-uppercase text-success font-weight-bold text-center ">@lang('Email')</p>
    <p class="font-italic text-center">{{$contacto->email}}</p>
    <p class="text-uppercase text-success font-weight-bold text-center ">@lang('Edad')</p>
    <p class="font-italic text-center">{{$contacto->edad}}</p>
    <p class="text-uppercase text-success font-weight-bold text-center ">@lang('Cumpleaños')</p>
    <p class="font-italic text-center">{{$contacto->nacimiento}}</p>
    <p class="text-uppercase text-success font-weight-bold text-center ">@lang('Idioma')</p>
    <p class="font-italic text-center">{{$contacto->idioma}}</p>
    <p class="text-uppercase text-success font-weight-bold text-center ">{{ __('Descripción')}}</p>
    <p class="font-italic text-center">{{$contacto->descripcion}}</p>
    <p class="text-uppercase text-success font-weight-bold text-center ">@lang('Color')</p>
    <p class="font-italic text-center">{{$contacto->color}}</p>
</div>


