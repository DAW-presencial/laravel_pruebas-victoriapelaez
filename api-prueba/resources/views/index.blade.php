<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Api-prueba</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="m-5">
    <h3 class="text-primary border-bottom border-primary">AGENDA DE CONTACTOS</h3>
    <div class="container mw-100">
        <div class="row">
            <div class="col-xl-4 col-md-12 p-5">
                {{--<div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id">
                </div>--}}
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono">
                </div>

                <button type="submit" onclick="api_js_create()" class="btn btn-primary">Crear contacto +</button>
                <button  onclick="api_js_index()" class="btn btn-outline-info">Ver Todos</button>
            </div>

        <div id="resultado" class="col-xl-8 col-md-12 p-5">
        </div>
        </div>
    </div>

    <h3 class="text-primary border-bottom border-primary">Información extra del contacto elegido</h3>
    <div class="contacto">

    </div>
</div>
<script>
    window.addEventListener('load', () => api_js_index())
</script>
</body>
<script src="/js/apirest.js">
</script>
</html>
