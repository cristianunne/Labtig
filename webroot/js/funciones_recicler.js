function loadLayers()
{
    if (layersoverlay == null){

    } else {
        //Proceso las capas base y cargo al mapa
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

        for (var i = 0; i < layersoverlay.length; i++){

            var capa = layersoverlay[i];
            var active_capa = capa['nombre'];
            var capatomap = L.tileLayer.wms(capa['urlservice'], {
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
                'attribution' : capa['attribution']
            });


            layerControl.addOverlay(capatomap, capa['nombre'].toString());


        }

    }

}
