<html>
<head>
    <title>agendaDB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: linear-gradient(45deg, #49a09d, #5f2c82);
            font-family: sans-serif;
            font-weight: 100;
            color: white;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            margin-left: auto;
            margin-right: auto;
            border-radius: 2rem;
            width: 80%;
            margin-bottom: 2rem;

        }

        .input-container {
            display: flex;
            flex-direction: column;

        }

        .mensaje {
            color: red;
            background-color: white;
            border: red 1px solid;
            padding: 1rem;
            margin: 2rem;
        }

        input {
            width: 17rem;
        }

        .boton {
            background-color: rebeccapurple;
            color: white;
            border: 0;
            border-radius: 1rem;
            margin: 1rem;
            font-weight: bold;
            width: 12rem;
        }

        .titulo {
            align-self: center;
            color: whitesmoke;
            text-decoration: overline;
            font-size: 2rem;
            margin-top: 2rem;
        }

        .tabla {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
            margin-bottom: 2rem;
        }

        table {
            width: 800px;
            border-collapse: collapse;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: whitesmoke;
        }

        th,
        td {
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.2);
            color: rebeccapurple;
        }

        tbody {
        }

        thead {
            background-color: #55608f;
            text-align: center;
        }

        form {
            color: black;
            display: flex;
            flex-direction: column;
            margin: auto;
        }

    </style>
</head>

<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{ isset($contacto->nombre)?$contacto->nombre:old('nombre') }}" id="nombre"
       placeholder="Nombre" class="input"/><br>
<label for="apellido">Apellido</label>
<input type="text" name="apellido" value="{{ isset($contacto->apellido)?$contacto->apellido:old('apellido') }}"
       id="apellido" placeholder="Apellido"
       class="input"/><br>
<label for="telefono">Telefono</label>
<input type="text" name="telefono" value="{{ isset($contacto->telefono)?$contacto->telefono:old('telefono') }}"
       id="telefono" placeholder="Teléfono"
       class="input"/><br>
<label for="email">Email</label>
<input type="text" name="email" value="{{ isset($contacto->email)?$contacto->email:old('email') }}" id="email"
       placeholder="Email" class="input"/><br>
<label for="foto">Foto</label>
<img src="{{ asset('storage'.'/'.$contacto->foto) }}" alt="Imagen Contacto" width="70">
<input type="file" name="foto" value="" id="foto" class="input"/><br>
<input type="submit" value="Guardar Datos" class="boton"/>
