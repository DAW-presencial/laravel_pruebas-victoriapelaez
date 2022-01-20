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

        }

        .input-container {
            display: flex;
            justify-content: center;
        }

        input {
            margin: 1rem;
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

    </style>
</head>

<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{$contacto->nombre}}" id="nombre" placeholder="Nombre" class="input"/><br>
<label for="apellido">Apellido</label>
<input type="text" name="apellido" value="{{$contacto->apellido}}" id="apellido" placeholder="Apellido"
       class="input"/><br>
<label for="telefono">Telefono</label>
<input type="text" name="telefono" value="{{$contacto->telefono}}" id="telefono" placeholder="Teléfono"
       class="input"/><br>
<label for="email">Email</label>
<input type="text" name="email" value="{{$contacto->email}}" id="email" placeholder="Email" class="input"/><br>
<label for="foto">Foto</label>
<img src="{{ asset('storage'.'/'.$contacto->foto) }}" alt="Imagen Contacto" width="70">
<input type="file" name="foto" value="" id="foto" class="input"/><br>
<input type="submit" value="Guardar Datos" class="boton"/>
