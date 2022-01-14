
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
        .input-container{
            display: flex;
            justify-content:center;
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
            color:rebeccapurple;
        }
        tbody{
        }
        thead {
            background-color: #55608f;
            text-align: center;
        }

    </style>
</head>
<body>
<div class="main-container">
    <h1 class="titulo">CREAR CONTACTO</h1>

</div>
<div class="input-container">
    <form action="{{url('/agenda')}}" method="post" class="formulario" enctype="multipart/form-data">
        @csrf
{{--@include('agenda.form')--}}

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="" id="nombre" placeholder="Nombre" class="input"/><br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" value="" id="apellido" placeholder="Apellido" class="input"/><br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="" id="telefono" placeholder="Teléfono" class="input"/><br>
        <label for="email">Email</label>
        <input type="text" name="email" value="" id="email" placeholder="Email" class="input"/><br>
        <label for="foto">Foto</label>
        <input type="file" name="foto" value="" id="foto" class="input"/><br>
        <input type="submit" value="Guardar Datos" class="boton"/>

    </form>
</div>

</body>
</html>
