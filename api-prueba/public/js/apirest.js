/*function generar2Tabla(response) {
//    const datos = response;
//    const datos = JSON.parse(response);
    respuesta = '<div class="content"><table class="table table-head-fixed text-nowrap table-striped table-bordered">'
        + '<thead><tr><th>Siglas</th><th>Fecha</th><th>Concepto</th><th>Importe</th><th>Saldo</th></tr></thead><tbody>';
    for (let item of response) {
        respuesta += '<tr><td>'
            + item.siglas + '</td><td>'
            + item.fecha + '</td><td>'
            + item.concepto + '</td><td class="text-right">' + item.importe + '</td><td class="text-right">'
            + item.saldo + '</td></tr>';
    }
    return respuesta + '</tbody></table></div>';
}*/

/* usando ajax con javascript  w3schools curso Ajax*/
function api_js_index() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById('resultado').innerHTML = xhttp.responseText;
//   también
//        document.getElementById('respuesta').innerHTML=xhttp.responseText;
    };
    xhttp.open('GET', '/api/apirest', true);
    /*xhttp.setRequestHeader('Content-Type', 'application/vnd.api+json');
    xhttp.setRequestHeader('Accept', 'application/vnd.api+json');*/
    xhttp.send();
}
