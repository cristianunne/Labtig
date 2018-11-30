
function getInfoByClick(element){

    var div_info_content = $("#div-info-content");

    if(!div_info_content.hasClass('button-click')){
        div_info_content.addClass('button-click');
        $("#mapid").addClass('cursor-info');

        $(element).blur();

        //Debo iniciar la consulta a geoserver

        mymap.on('click',creatTableAttr);


        for(var i = 0; i < capasoverlaycurrent.length; i++ ){

            var capa = capasoverlaycurrent[i];
            //Hago visible la tabla


            mymap.on('click', capa.getFeatureInfo, capa);

        }


    } else {
        div_info_content.removeClass('button-click');
        $(element).blur();

        //elimino el evento del mapa
        $("#mapid").removeClass('cursor-info');

        for(var i = 0; i < capasoverlaycurrent.length; i++ ){

            var capa = capasoverlaycurrent[i];
            //Hago visible la tabla


            mymap.off('click', capa.getFeatureInfo, capa);
            mymap.off('click',creatTableAttr);

        }

    }

}

//Etiqueta info del boton info
function showEtiquetaInfo(elemento){


        var text_etiqueta = $(elemento).attr('attr');

        var div_inicial = '<div id="info_context" class="etiqueta-info">' + text_etiqueta + ' </div>';

        //Obtengo el tamaño del elemeneto
        var width = $(elemento).width();
        var height = $(elemento).height();
        var left = $(elemento).offset().left;
        var top = $(elemento).offset().top;

        var x_pos = left + width;
        var y_pos = top + height;

        $('#section_content').append(div_inicial);
        $("#info_context").css({left: x_pos , top: y_pos});


}
function closeEtiquetaInfo() {

    $('#info_context').remove();

}

function creatTableAttr(content){
    num_layer_query = 0;
    showTable();
    $("#content-div-tables").empty();
    $("#ul-content-ref").empty();
}

function onClickPupup(e) {
    var popLocation= e.latlng;
    var popup = L.popup()
        .setLatLng(popLocation)
        .setContent('<p>Hello world!<br />Todo ha cambiado.</p>')
        .openOn(mymap);
}

function onmouseleavefunction() {
    var div_info_content = $("#div-info-content");
    div_info_content.blur();
    div_info_content.trigger("refresh");
}

