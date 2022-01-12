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
            border: rebeccapurple 2px solid;
            border-radius: 2rem;
            width: 80%;
            background-color: whitesmoke;
        }

        .titulo {
            align-self: center;
            color: rebeccapurple;
            text-decoration: overline;
        }

        .lista {
            list-style-type: square;
            font-style: italic;
            color: darkblue;
        }

        .formulario {
            align-self: center;
        }

        .input {
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

        .tabla {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        table {
            width: 800px;
            border-collapse: collapse;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        th {
            color: rebeccapurple;
        }


        th {
            background-color: #55608f;
        }



        td {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="main-container">
    <h1 class="titulo">CREAR CONTACTO</h1>

    <form method="post" class="formulario">
        <input type="text" name="nombre" placeholder="Nombre" value="" class="input"/>
        <input type="text" name="apellido" placeholder="Apellido" value="" class="input"/>
        <input type="text" name="telefono" placeholder="Telefono" value="" class="input"/>
        <input type="text" name="email" placeholder="Email" value="" class="input"/><br>
        <input type="submit" value="Añadir Contacto" name="agregar" class="boton"/>

    </form>
</div>
</body>
</html>
