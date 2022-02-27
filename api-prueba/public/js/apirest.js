function api_js_index() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById('resultado').innerHTML = generarTabla(JSON.parse(xhttp.responseText));
    };
    xhttp.open('GET', '/api/apirest', true);
    xhttp.send();//dentro del parentesis puede ir el body
}

function api_js_delete(id) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById('resultado').innerHTML = "<p class='text-danger m-5 text-center'>Contacto borrado</p>" +
            "<p class='text-danger m-5 text-center'>Haga click en el botón ver todos</p>";
    };
    xhttp.open('DELETE', '/api/apirest/' + id, true);
    xhttp.setRequestHeader('Content-Type', 'application/vnd.api+json');
    xhttp.setRequestHeader('Accept', 'application/vnd.api+json');
    xhttp.send();
}

function api_js_create() {
    let nombre = document.querySelector("#name").value;
    let apellido = document.querySelector("#apellido").value;
    let telefono = document.querySelector("#telefono").value;
    let email = document.querySelector("#email").value;

    fetch('/api/apirest', {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
        },
        body: JSON.stringify({nombre: nombre, apellido: apellido, telefono: telefono, email: email})
    })
        .then(document.getElementById('resultado').innerHTML = "<p class='text-danger m-5 text-center'>Contacto creado</p>");
    setTimeout(location.reload(), 3000);

}

function api_js_update(id) {
    let nombre = document.querySelector("#name").value;
    let apellido = document.querySelector("#apellido").value;
    let telefono = document.querySelector("#telefono").value;
    let email = document.querySelector("#email").value;
    fetch('/api/apirest/' + id, {
        method: 'PATCH',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({nombre: nombre, apellido: apellido, telefono: telefono, email: email})
    })
        .then(document.getElementById('resultado').innerHTML = "<p class='text-danger m-5 text-center'>Contacto Actualizado</p>");
    setTimeout(location.reload(), 3000);
}

function api_js_show(id) {
    fetch('/api/apirest/' + id)
        .then(response => response.json())
        .then(data => {
            document.querySelector(".contacto").innerHTML = verInfoExtra(data.data);
        })

}

function generarTabla(response) {
    datos = `<div class="m-4"><table class="table table-sm table-hover table-responsive">
        <thead class="text-center bg-light">
        <tr>
        <th scope="col" class="px-4">Nombre</th>
        <th scope="col" class="px-4">Apellido</th>
        <th scope="col" class="px-4">Teléfono</th>
        <th scope="col" class="px-4">Email</th>
        <th scope="col" class="px-4">Acciones</th>
        </tr>
        </thead>
        <tbody  class="text-center">`
    for (let contacto of response) {
        datos += `<tr>
        <td class="px-4">${contacto.nombre}</td>
        <td class="px-4">${contacto.apellido}</td>
        <td class="px-4">${contacto.telefono}</td>
        <td class="px-4">${contacto.email}</td>
        <td class="px-4 d-flex flex">
            <button onclick="api_js_delete(${contacto.id})" class="btn btn-danger btn-sm"><img src="https://img.icons8.com/carbon-copy/20/000000/full-trash.png"/></button>
            <button onclick ="renderFormularioActualizar(${contacto.id})" class="btn btn-warning btn-sm"><img src="https://img.icons8.com/ios/20/000000/pencil-tip.png"/></button>
            <button onclick = "api_js_show(${contacto.id})" class="btn btn-success btn-sm"><img src="https://img.icons8.com/windows/20/000000/visible--v1.png"/></button></td><tr>`;
    }
    return datos + '</tbody></table></div>';
}

function verInfoExtra(data) {
    datos = `El contacto ${data.nombre}
             ${data.apellido} tiene
             ${data.edad} años y su color favorito es el  ${data.color}.`;
    return datos;
}

function renderFormularioCrear() {
    document.getElementById('formulario').innerHTML = `<div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" value="">
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
                <button type="submit" onclick="api_js_create()" class="btn btn-primary"> Crear </button>`;
}

function renderFormularioActualizar(id) {
    document.getElementById('formulario').innerHTML = `<div class="mb-3">
                <p class="text-danger text-center">Debe rellenar todos los campos</p>
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" value="">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" value="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" value="">
                </div>
                <button type="submit" onclick="api_js_update(${id})" class="btn btn-outline-warning"> Actualizar </button>`;
}
