$(document).ready(function() {

    let x = $(document);
    x.ready(inicializarEventos);
    // buscar();
    $('#busqueda').keyup(buscar);
})

function buscar() {
    var busq = document.getElementById('busqueda').value;
    res = document.getElementById('res')

    $.ajax({
        url: 'php/consulta.php',

        data: { busq: $scope.lastName },
        type: 'POST',
        dataType: 'json',

        error: function(xhr, status) {
            alert('Disculpe, existió un problema');
        },

        complete: function(xhr, status) {
            xhr.responseText;
            var obj = jQuery.parseJSON(xhr.responseText);
            var cad = '';
            console.clear();
            for (const key in obj) {
                console.log(obj[key].producto)
                    // cad += '<div class="card" style="width: 20vw;"><div class="card-body"><h5 class="card-title">' + obj[key].producto + '</h5><p class="card-text"></p><a href="#" class="btn btn-primary">Go somewhere</a></div></div>';
                cad += '<tr><td> <a class="enlace" href="pagProduct.php?id=' + obj[key].id + '">' + obj[key].producto + '</a> </td></tr>';
            }
            res.innerHTML = cad;
        }
    });
}


function inicializarEventos() {
    let x = $("#menu a");
    x.click(presionEnlace);
}


function presionEnlace() {
    let pagina = $(this).attr("href");
    let x = $(document);
    x.ajaxStart(inicioEnvio);
    x = $("#detalles");
    x.load(pagina);
    return false;
}