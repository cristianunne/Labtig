

//Variables usada para cargar los datos
var mapconfig = null;
var capasbase = null;

var capasBaseList = [];

$(function()
{

        /*var targeturl = $(this).attr('rel');
        $.ajax({
            type: 'get',
            dataType:'JSON',
            url: "<?php echo $this->Url->build(['controller' => 'index', 'action' => 'simpleAction']); ?>",
            beforeSend: function(xhr)
            {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            success: function(response)
            {
                if (response.result)
                {
                    var result = response.result;

                    $('#result').html(result);
                }
            },
            error: function(e)
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });*/


    $.ajax({
        url: 'index/getConfigMap',
        beforeSend: function(xhr)
        {
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        },
        success:function(data){

            //Consulto que la respuesta no sea null
            if (data != null){
                //Remplazo los corchetes por los parentesis
                data.dataconfig['center'] = transformToArray(data.dataconfig['center'])

                console.log(data);
                mapconfig = data.dataconfig;
                capasbase = data.capasbase;

                //Inicializo el Mapa
                init();


            }

        }
    });



});

var mymap = null;


function init()
{
    if (mapconfig != null){

        if (settingMapParmas()){
            loadBaseMaps();
        }

        //Si el mapa estuvo ok, cargo las capas base


    }


}

//Funcion que setea los parametros iniciales del Mapa
function settingMapParmas()
{
    //Creo las vaibales de la Configuracion inicial del mapa
    var crs = null;
    var center = null;
    var zoom = null;
    var minzoom = null;
    var maxzoom = null;
    var renderer = null;

    //Asigno los valores a las variables
    crs = mapconfig['crs'];
    center = JSON.parse(mapconfig['center']);
    zoom = mapconfig['zoom'];
    minzoom = mapconfig['minzoom'];
    maxzoom = mapconfig['maxzoom'];
    renderer = mapconfig['renderer'];

    if (center == null || minzoom == null){
        //Retorno un cartel informando que se debe configurar o establezco uno por defecto
    } else {
        //Todo ok, asi qeu avanzo

        mymap = L.map('mapid', {minZoom: minzoom})
            .setView(center, zoom);

        return true;
        //Cargo las capas base como prueba

    }


}

function loadBaseMaps()
{

    //Variables del BaseMap
    var urlservice = null;
    var attribution = null;
    var subdomain = null;
    var minzoom = null;
    var maxzoom = null;
    var format = null;
    var time = null;
    var tilematrixset = null;
    var opacity = null;
    var nombre = null;
    var active = null;

    var layerControl = new L.control.layers();


    if (capasbase == null){

    } else {
        //Proceso las capas base y cargo al mapa
        for (var i = 0; i < capasbase.length; i++){

            var capa = capasbase[i];
            $.each(capasbase[i], function(j, item) {
                if (item === null){
                    //Elimina los datos vaciones de un arreglo
                    delete capasbase[i][j];
                }
            });
        }

        //console.log(capasbase);
        for (var i = 0; i < capasbase.length; i++){

            var capa = capasbase[i];

            var capatomap = L.tileLayer(capa['urlservice'], {
                capa
            });


            layerControl.addBaseLayer(capatomap, capa['nombre'].toString());
            layerControl.addTo(mymap);

        }


    }


}



function transformToArray(data) {

    var cadena = data,
        patron = /{/g,
        nuevoValor  = "[",
        nuevaCadena = cadena.replace(patron, nuevoValor);

    var cadena2 = nuevaCadena,
        patron2 = /}/g,
        nuevoValor2  = "]",
        nuevaCadena2 = cadena2.replace(patron2, nuevoValor2);

    return nuevaCadena2;

}