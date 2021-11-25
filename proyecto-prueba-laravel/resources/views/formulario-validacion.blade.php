<html>
<h2>Formulario del alumno:</h2>
<form action="" method="post">
    Nombre:
    <input type="text" name="nombre"><br>
    Email:
    <input type="text" name="email"><br>
    Contraseña:
    <input type="password" name="password"><br>
    Educacion:
    <select name="educacion">
        <option value="sin-estudios">Sin estudios</option>
        <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
        <option value="formacion-profesional">Formación profesional</option>
        <option value="universidad">Universidad</option>
    </select> <br>

    Idiomas:
    <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
    <input type="checkbox" name="idiomas[]" value="ingles">Inglés</input>
    <input type="checkbox" name="idiomas[]" value="frances">Francés</input>
    <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input><br>

    <input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>


