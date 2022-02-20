function generarTabla(response) {
    console.log(response)
    datos = `<div class="content"><table>
        <thead><tr><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Email</th><th>Edad</th></tr></thead><tbody>`
    for (let contacto of response) {
        datos += `<tr><td>
             ${contacto.nombre}  </td><td>
             ${contacto.apellido}  </td><td>
             ${contacto.telefono}  </td><td class="text-right">
             ${contacto.email}  </td><td class="text-right">
             ${contacto.edad}  </td><td>
        <button onclick="api_js_delete(${contacto.id})">Eliminar</button></td></tr>`;
    }
    return datos;
}

/* usando ajax con javascript  w3schools curso Ajax*/
function api_js_index() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
         generarTabla(JSON.parse(xhttp.responseText));
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

function api_js_create(data) {
    fetch('/api/apirest', {
        method: 'post',
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
        },
        body: JSON.stringify(data)
    }).then( ()=> {
        document.getElementById('resultado').innerHTML = "<p>Contacto creado</p>";
    })
}

