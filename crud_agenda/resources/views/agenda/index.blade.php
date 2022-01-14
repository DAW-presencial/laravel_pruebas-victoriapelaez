<!--Formulario-->
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
            text-align: center;
        }

        tbody {
        }

        thead {
            background-color: #55608f;
            text-align: center;
        }

    </style>
</head>
<body>
<div class="main-container">
    <h1 class="titulo">AGENDA CONTACTOS</h1>
    <div class='tabla'>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Foto</th>
                <th>Acciones</th>

            </tr>
            </thead>
            <tbody>
            @foreach($datos as $dato)
                <tr>
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->nombre}}</td>
                    <td>{{$dato->apellido}}</td>
                    <td>{{$dato->telefono}}</td>
                    <td>{{$dato->email}}</td>
                    <td>
                        <img src="{{asset('storage'.'/'.$dato->foto)}}" alt="Imagen Contacto">
                    </td>
                    <td>
                        <a href="{{url('/agenda/'.$dato->id.'/edit')}}">
                            Editar
                        </a>
                        |
                        <form action="{{url('/agenda/'.$dato->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" onclick="return confirm('¿Deseas borrar el contacto?')" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="input-container">
    <a href="{{url('/agenda/create')}}">
        <input type="submit" value="Crear Contacto" name="agregar" class="boton"/>
    </a>

    {{--<input type="submit" value="Editar Contacto" name="editar" class="boton"/>
    <input type="submit" value="Eliminar Contacto" name="eliminar" class="boton"/>--}}
</div>

</body>
</html>
