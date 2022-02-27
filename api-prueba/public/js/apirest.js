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
            <button onclick = "" class="btn btn-warning btn-sm"><img src="https://img.icons8.com/ios/20/000000/pencil-tip.png"/></button>
            <button onclick = "api_js_show(${contacto.id})" class="btn btn-success btn-sm"><img src="https://img.icons8.com/windows/20/000000/visible--v1.png"/></button></td><tr>`;
    }
    return datos + '</tbody></table></div>';
}

function verContacto(response) {
    datos = `<div class="content"><table>
        <thead><tr><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Email</th><th>Edad</th></tr></thead><tbody>`
        `<tr><td>
             ${response.nombre}  </td><td>
             ${response.apellido}  </td><td>
             ${response.telefono}  </td><td class="text-right">
             ${response.email}  </td><td class="text-right">
             ${response.edad}  </td></tr>
    </tbody></table></div>`;
    return datos;
}

/* usando ajax con javascript  w3schools curso Ajax*/
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
        document.getElementById('resultado').innerHTML = "<p>Contacto borrado</p>";
    };
    xhttp.open('DELETE', '/api/apirest/' + id, true);
    xhttp.setRequestHeader('Content-Type', 'application/vnd.api+json');
    xhttp.setRequestHeader('Accept', 'application/vnd.api+json');
    xhttp.send();
}


function api_js_create() {
    let nombre = document.querySelector(".nombre").value;
    let apellido = document.querySelector(".apellido").value;
    let telefono = document.querySelector(".telefono").value;
    let email = document.querySelector(".email").value;

    fetch('/api/apirest', {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
        },
        body: JSON.stringify({nombre: nombre, apellido: apellido, telefono: telefono, email: email})
    })
}


/*function api_js_update(data) {

    })
}*/

function api_js_show(id) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.querySelector(".contacto").innerHTML = verContacto(JSON.parse(xhttp.responseText));
    };
    xhttp.open('GET', '/api/apirest/' + id, true);
    xhttp.setRequestHeader('Content-Type', 'application/vnd.api+json');
    xhttp.setRequestHeader('Accept', 'application/vnd.api+json');
    xhttp.send();
}
