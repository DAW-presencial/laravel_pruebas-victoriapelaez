function generarTabla(response) {
//    const datos = response;
//    const datos = JSON.parse(response);
    datos = '<div class="content"><table class="table table-head-fixed text-nowrap table-striped table-bordered">'
        + '<thead><tr><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Email</th><th>Edad</th></tr></thead><tbody>';
    for (let contacto of response) {
        datos += '<tr><td>'
            + contacto.nombre + '</td><td>'
            + contacto.apellido + '</td><td>'
            + contacto.telefono + '</td><td class="text-right">'
            + contacto.email + '</td><td class="text-right">'
            + contacto.edad + '</td></tr>';
    }
    return datos + '</tbody></table></div>';
}

/* usando ajax con javascript  w3schools curso Ajax*/
function api_js_index() {
    const xhttp = new XMLHttpRequest();//se instancia solo con ajax
    xhttp.onload = function () {
        document.getElementById('resultado').innerHTML = generarTabla(JSON.parse(xhttp.responseText));
            //generarTabla(JSON.parse(xhttp.responseText))
        //si es json hay q parsear responseText --> JSON.parse(responsetext)
    };
    xhttp.open('GET', '/api/apirest', true);//metodo, ruta servidor, es predeterminado el true
    xhttp.send();//dentro del parentesis puede ir el body
}
