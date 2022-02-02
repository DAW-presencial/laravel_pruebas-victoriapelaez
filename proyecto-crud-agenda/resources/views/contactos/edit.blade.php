@include('layouts.head')
@include('layouts.navigation')

<div class="container">
    <div class="header text-uppercase p-5">
        <h3 class="border-bottom border-primary">Editar Contacto</h3></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('/contactos/'.$datos->id) }}" method="post" class=" well form-horizontal"
                  enctype="multipart/form-data">
                @csrf
                {{method_field('PATCH')}}
                <fieldset>
                    <legend class="text-center header"></legend>

                    <div class="form-group ">
                        <i class="fa fa-user bigicon"></i>
                        <label for="nombre" class="col-sm-2 col-form-label">@lang('Nombre')</label>
                        <input type="text" name="nombre"
                               value="{{ isset($datos->nombre)?$datos->nombre:old('nombre') }}"
                               id="nombre" placeholder="Nombre" class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-user bigicon"></i>
                        <label for="apellido" class="col-sm-2 col-form-label">@lang('Apellido')</label>
                        <input type="text" name="apellido"
                               value="{{ isset($datos->apellido)?$datos->apellido:old('apellido') }}"
                               id="apellido" placeholder="Apellido" class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-phone-square bigicon"></i>
                        <label for="telefono" class="col-sm-2 col-form-label">@lang('Teléfono')</label>
                        <input type="text" name="telefono"
                               value="{{ isset($datos->telefono)?$datos->telefono:old('telefono') }}"
                               id="telefono" placeholder="Teléfono" class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-envelope-o bigicon"></i>
                        <label for="email" class="col-sm-2 col-form-label">@lang('Email')</label>
                        <input type="text" name="email"
                               value="{{ isset($datos->email)?$datos->email:old('email') }}" id="email"
                               placeholder="Email" class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-user bigicon"></i>
                        <label for="edad" class="col-sm-2 col-form-label">@lang('Edad')</label>
                        <input type="number" name="edad" value="{{ old('edad', $datos->edad ?? '') }}"
                               id="edad"
                               class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-user bigicon"></i>
                        <label for="nacimiento" class="col-sm-2 col-form-label">@lang('Fecha de Nacimiento')</label>
                        <input type="date" name="nacimiento"
                               value="{{ isset($datos->nacimiento)?$datos->nacimiento:old('nacimiento') }}"
                               id="nacimiento"
                               class="form-control"/><br>
                    </div>

                    <i class="fa fa-pencil-square-o bigicon"></i>
                    @lang('Idioma'):<br><br>
                    <div class="form-check">
                        <label for="idioma" for="idioma">
                            <input class="form-check-input" type="radio"
                                   name="idioma" value="espanol" {{ ($datos->idioma=="espanol")? "checked" : "" }} /> @lang('Español')
                            <br>
                            <input class="form-check-input" type="radio"
                                   name="idioma" value="ingles" {{ ($datos->idioma=="ingles")? "checked" : "" }}/> @lang("Inglés")
                        </label>

                    </div>
                    <br>

                    <div class="form-group">
                        <i class="fa fa-pencil-square-o bigicon"></i>
                        <label for="descripcion" class="col-form-label">@lang('Escribe una breve descripción de ti'):</label><br>
                        <textarea id="descripcion" name="descripcion" class="form-control" rows="4" cols="50">{{ isset($datos->descripcion)?$datos->descripcion:old('descripcion') }}
        </textarea><br>
                    </div>

                    <div class="d-flex w-25">
                        <i class="fa fa-pencil-square-o bigicon align-self-center"></i>
                        <label for="color" class="col col-form-label">@lang('Elije un color favorito'):</label><br>
                        <div class="form-check">
                            <select name="color" id="color" class="form-check-input">
                                <option value="rojo" @if(isset($datos->color)) @if($datos->color=="rojo") selected @endif @endif>@lang('Rojo')</option>
                                <option value="azul" @if(isset($datos->color)) @if($datos->color=="azul") selected @endif @endif>@lang('Azul')</option>
                                <option value="verde" @if(isset($datos->color)) @if($datos->color=="verde") selected @endif @endif>@lang('Verde')</option>
                                <option value="amarillo" @if(isset($datos->color)) @if($datos->color=="amarillo") selected @endif @endif>@lang('Amarillo')</option>
                            </select><br>
                        </div>
                    </div>
                    <br><br>

                    <div class="form-check">
                        <label for="privacidad" class="col col-form-label">
                            <input type="checkbox" name="privacidad" id="privacidad" class="form-check-input" value="1"
                                   @if(isset($datos->privacidad)) @if($datos->privacidad=="1") checked @endif @endif >@lang('Acepto los términos de privacidad')
                        </label><br>

                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary mb-2">@lang('Aceptar')</button>

                </fieldset>
            </form>
        </div>
    </div>
</div>
