

//Variables usada para cargar los datos
var mapconfig = null;
var capasbase = null;
var layersoverlay = null;
var countcapasbase = null;

//Es la variable que genera el controlador de las capas bases
var layerControl = new L.control.layers();

var capasBaseList = [];
var capasoverlaycurrent = [];


$(function()
{
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
                layersoverlay = data.layersoverlay;
                countcapasbase = data.countcapasbase;

                //Inicializo el Mapa
                init();

            }
        }, error:function () {
            //Muestro algun mensaje de error
        } 
    });


});

var mymap = null;


function init()
{
    if (mapconfig != null){

        if (settingMapParmas()){
            changeParametersBaseMaps();
            changeParametersLayerOverlay();
            loadCapasBase();
            scaleControl();
        }

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

/*
    Metodo que elimina los atributos null de las capas bases que vienen de la DB
 */
function changeParametersBaseMaps()
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

    if (capasbase == null){

    } else {
        //Proceso las capas base y cargo al mapa
        var ini = 0;
        for (var i = 0; i < capasbase.length; i++){

            var capa = capasbase[i];
            $.each(capasbase[i], function(j, item) {
                if (item === null){
                    //Elimina los datos vaciones de un arreglo
                    delete capasbase[i][j];
                }
            });


            //Agrego el atributo de tipo de capa

        }
    }
}


/*
    Funcion que controla el renderizado de las capas base en el downmenu
 */
function loadCapasBase()
{
    if (countcapasbase != null){

        //obtengo el id del div
        for (var i = 1; i <= countcapasbase; i++){

            var div = "mapa_" + i.toString();
            //Obtengo el div pasandole el ID
            var id = $("#" + div).attr('attr');

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

                mymap_2 = L.map(div, {minZoom: 1, attributionControl: false, zoomControl: false})
                    .setView([-15, -78], 0);

                //recorro las capas bases y cargo segun el id
                for (var j = 0; j < capasbase.length; j++){
                   if(capasbase[j]['idcapasbase'] == id){
                       var capa = capasbase[j];

                       //Carga los mapas chiquitos
                       var capatomap = L.tileLayer(capasbase[j]['urlservice'], {
                           capa
                       }).addTo(mymap_2);

                       var capatomap_2 = L.tileLayer(capasbase[j]['urlservice'], {
                           capa,
                           'className' : capasbase[j]['nombre']
                       })

                       //Cargo el 1er base map al mapa
                       if (i == 1){
                            loadFirstCapaBase(capatomap_2, id);
                       }

                   }
                }

            }
        }
    }


}

function loadFirstCapaBase(basemap, idinput)
{
    basemap.addTo(mymap);

    var inputradio = $("#radio_" + idinput).prop('checked',true);

}

function capasBaseManager(elemento)
{
    var id = $(elemento).attr('attr');
    var classname = $(elemento).attr('classname');

    //Limpio todas las capas y la vuelvo a agegar segun el orden de carga

    mymap.eachLayer(function (layer) {
        mymap.removeLayer(layer);
    });

    //recorro las capas bases y cargo segun el id
    for (var j = 0; j < capasbase.length; j++){
        if(capasbase[j]['idcapasbase'] == id){
            var capa = capasbase[j];

            var capatomap = L.tileLayer(capasbase[j]['urlservice'], {
                capa,
                'className' : capa['nombre']
            });
            mymap.addLayer(capatomap, capa['nombre']);

        } else {

        }
    }

    //Aca tendria que volver a cargar los overlays
    if(capasoverlaycurrent.length > 0){

        for (var i = 0; i < capasoverlaycurrent.length; i++){

            mymap.addLayer(capasoverlaycurrent[i]);
        }

    }

}

/*
    Metodos que manejan los OVERLAYS Layers
 */

function changeParametersLayerOverlay()
{
    var ini = 0;
    for (var i = 0; i < layersoverlay.length; i++){

        var capa = layersoverlay[i];
        $.each(layersoverlay[i], function(j, item) {
            if (item === null){
                //Elimina los datos vaciones de un arreglo
                delete layersoverlay[i][j];
            }
        });
    }
}

function overlaylayermanager(layer)
{
    if(layersoverlay != null){
        var id = $(layer).attr('idlayer');

        var capa = null;

        //Recorro los overlay y consulto la capa

        for (var i = 0; i < layersoverlay.length; i++){

            if(layersoverlay[i]['idlayer'] == id){
                capa = layersoverlay[i];

                //Verifico si es checked o unchecked y quito o agrego
                if($(layer).prop('checked')){

                    var capatomap = L.tileLayer.wms(capa['urlservice'], {
                        'idlayer' : capa['idlayer'],
                        'layers' : capa['layers'],
                        'styles' : capa['styles'],
                        'transparent' : capa['transparent'],
                        'format' : capa['format'],
                        'version' : capa['version'],
                        'crs' : capa['crs'],
                        'minZoom' : capa['minzoom'],
                        'maxZoom' : capa['maxzoom'],
                        'opacity' : capa['opacity'],
                        'uppercase' : capa['uppercase'],
                        'attribution' : capa['attribution'],
                        'className' : capa['nombre']
                    });

                    mymap.addLayer(capatomap);

                    capasoverlaycurrent.push(capatomap);


                } else {

                    mymap.eachLayer(function (layermap) {

                        if(layermap.options.idlayer == id){
                            mymap.removeLayer(layermap);
                            deleteObjectOfOverlayCurrentArray(layermap);
                        }
                    });
                }

            }

        }

    }

}


function deleteObjectOfOverlayCurrentArray(capa_select) {

    var cantidad = capasoverlaycurrent.length;
    for (var i = 0; i < cantidad; i++){

        var capa_over = capasoverlaycurrent[i];

        if(capa_over != null){
            if(capa_over.options['idlayer'] == capa_select.options['idlayer']){
                var index = capasoverlaycurrent.indexOf(capa_over);
                capasoverlaycurrent.splice(index, 1);
            }
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


/*
    Funcion que carga la escala contro
 */

function scaleControl()
{

    L.control.scale({position : 'bottomleft', imperial : false}).addTo(mymap);

}

/*
    Control de creacion de las referencias
 */

function legendManager(element)
{
    //Obtengo las variables del checkbox
    var idlayer = $(layer).attr('idlayer');
    var parent = $(layer).attr('parent');
    var escala = $(layer).attr('escala');

    var ul_container = $("#ul-reference-container").attr('escala');





}