<!doctype html>
<html lang="en">
<head>
    <title>agendaDB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .header {
            color: #36A0FF;
            font-size: 27px;
            padding: 10px;
        }

        .bigicon {

            color: #36A0FF;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('/agenda') }}" method="post" class=" well form-horizontal" enctype="multipart/form-data">
                @csrf

                <fieldset>
                    <legend class="text-center header">Crear Contacto</legend>

                    <div class="form-group">
                        <i class="fa fa-user bigicon"></i>
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <input type="text" name="nombre"
                               value="{{ isset($contacto->nombre)?$contacto->nombre:old('nombre') }}"
                               id="nombre" placeholder="Nombre" class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-user bigicon"></i>
                        <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                        <input type="text" name="apellido"
                               value="{{ isset($contacto->apellido)?$contacto->apellido:old('apellido') }}"
                               id="apellido" placeholder="Apellido" class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-phone-square bigicon"></i>
                        <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                        <input type="text" name="telefono"
                               value="{{ isset($contacto->telefono)?$contacto->telefono:old('telefono') }}"
                               id="telefono" placeholder="Teléfono" class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-envelope-o bigicon"></i>
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <input type="text" name="email"
                               value="{{ isset($contacto->email)?$contacto->email:old('email') }}" id="email"
                               placeholder="Email" class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-user bigicon"></i>
                        <label for="edad" class="col-sm-2 col-form-label">Edad</label>
                        <input type="number" name="edad" value="{{ old('edad', $propiedad->edad ?? '') }}"
                               id="edad"
                               class="form-control"/><br>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-user bigicon"></i>
                        <label for="nacimiento" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                        <input type="date" name="nacimiento"
                               value="{{ isset($contacto->nacimiento)?$contacto->nacimiento:old('nacimiento') }}"
                               id="nacimiento"
                               class="form-control"/><br>
                    </div>

                    <i class="fa fa-pencil-square-o bigicon"></i>
                    Deportes que practica:<br><br>
                    <div class="form-check">
                        <label for="deporte" class="col-sm-2 col-form-label">
                            <input type="checkbox" name="deporte[]" id="futbol" class="form-check-input" value="1"
                                   @if(is_array(old('deporte')) && in_array(1, old('deporte'))) checked @endif/>Fútbol
                        </label><br>
                        <label for="deporte" class="col-sm-2 col-form-label">
                            <input type="checkbox" name="deporte[]" id="basket" class="form-check-input" value="2"
                                   @if(is_array(old('deporte')) && in_array(2, old('deporte'))) checked @endif/>Basket
                        </label><br>
                        <label for="deporte" class="col-sm-2 col-form-label">
                            <input type="checkbox" name="deporte[]" id="tennis" class="form-check-input" value="3"
                                   @if(is_array(old('deporte')) && in_array(3, old('deporte'))) checked @endif/>Tennis
                        </label><br>
                    </div>
                    <br>

                    <i class="fa fa-pencil-square-o bigicon"></i>
                    Idioma:<br><br>
                    <div class="form-check">
                        <input type="radio" id="espanol" name="idioma" class="form-check-input"
                               value="espanol" {{ old('idioma') == "espanol" ? 'checked' : '' }}>
                        <label for="espanol" class="col-sm-2 col-form-label">Español</label><br>
                        <input type="radio" id="ingles" name="idioma" class="form-check-input"
                               value="ingles" {{ old('idioma') == "ingles" ? 'checked' : '' }}>
                        <label for="ingles" class="col-sm-2 col-form-label">Inglés</label><br>
                    </div>
                    <br>

                    <div class="form-group">
                        <i class="fa fa-pencil-square-o bigicon"></i>
                        <label for="descripcion" class="col-form-label">Escribe una breve descripción de ti:</label><br>
                        <textarea id="descripcion" name="descripcion" class="form-control" rows="4" cols="50">{{ old('descripcion', $propiedad->descripcion ?? '') }}
        </textarea><br>
                    </div>

                    <i class="fa fa-pencil-square-o bigicon"></i>
                    <label for="cars" class="col-sm-2 col-form-label">Elije un color favorito:</label><br>
                    <div class="form-check">
                        <select name="color" id="color" class="form-check-input">
                            <option value="rojo" @if (old('color') === 'rojo') selected @endif>Rojo</option>
                            <option value="azul" @if (old('color') === 'azul') selected @endif>Azul</option>
                            <option value="verde" @if (old('color') === 'verde') selected @endif>Verde</option>
                            <option value="amarillo" @if (old('color') === 'amarillo') selected @endif>Amarillo</option>
                        </select><br>
                    </div><br>

                    <div class="form-group">
                        <i class="fa fa-user bigicon"></i>
                        <label for="foto" class="col-sm-2 col-form-label">Foto</label><br>
                        <input type="file" name="foto" value="" id="foto" class="col-form-label"/><br>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Guardar Contacto</button>

                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>

</html>
