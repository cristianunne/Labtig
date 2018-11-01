


function initMenuControls(){
    mymap.on('click', onClickPupup);
}


function onClickPupup(e) {
    $('.leaflet-container').css('cursor','crosshair');
    var popLocation= e.latlng;
    var popup = L.popup()
        .setLatLng(popLocation)
        .setContent('<p>Hello world!<br />Todo ha cambiado.</p>')
        .openOn(mymap);
}