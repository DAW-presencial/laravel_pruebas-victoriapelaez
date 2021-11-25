<?php
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if (isset($_POST["submit"])) {
    $nombre = filtrado($_POST["nombre"]);
    $email = filtrado($_POST["email"]);
    $password = filtrado($_POST["password"]);
    // Utilizamos implode para pasar el array a string
    $idiomas = filtrado(implode(", ", $_POST["idiomas"]));
}

?>


<html>
<body>
<h2>@lang('Formulario del alumno'):</h2>
<form action="/formulario-validacion" method="post">
    @method('post')
    @lang('Nombre'):
    <input type="text" name="nombre"><br>
    @lang('Email'):
    <input type="text" name="email"><br>
    @lang('Contraseña'):
    <input type="password" name="password"><br>

    @lang('Idiomas'):
    <input type="checkbox" name="idiomas[]" value="espanol" checked="checked">@lang('Español')</input>
    <input type="checkbox" name="idiomas[]" value="ingles">@lang('Inglés')</input>
    <input type="checkbox" name="idiomas[]" value="frances">@lang('Francés')</input>
    <input type="checkbox" name="idiomas[]" value="aleman">@lang('Alemán')</input><br>

    <input type="submit" name="submit" value="@lang('Enviar')">
</form>


<?php
var_dump($_POST);
/*if(isset($_POST["submit"])): */?><!--
<h2>Mostrar datos enviados</h2>
Nombre : <?php /*isset($nombre) ? print $nombre : ""; */?> <br>
Email : <?php /*isset($email) ? print $email : ""; */?> <br>
Contraseña : <?php /*isset($password) ? print $password : ""; */?> <br>
Idiomas : <?php /*isset($idiomas) ? print $idiomas : ""; */?> <br>
--><?php /*endif; */?>
</body>
</html>





