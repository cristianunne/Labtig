



function getInfoByClick(element){

    var div_info_content = $("#div-info-content");

    if(!div_info_content.hasClass('button-click')){
        div_info_content.addClass('button-click');
        $("#mapid").addClass('cursor-info');
        mymap.on('click', onClickPupup);
        $(element).blur();

        //Debo iniciar la consulta a geoserver


    } else {
        div_info_content.removeClass('button-click');
        $(element).blur();

        //elimino el evento del mapa
        $("#mapid").removeClass('cursor-info');
    }

}



function initMenuControls(){

        // Build the URL for a GetFeatureInfo

    //mymap.on('click', onClickPupup);
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




/**
 * Return the WMS GetFeatureInfo URL for the passed map, layer and coordinate.
 * Specific parameters can be passed as params which will override the
 * calculated parameters of the same name.
 */