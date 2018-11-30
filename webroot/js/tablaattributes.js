
//Guardo el numero de layer que fueron consultados y reinicio a 0 cuando cierro
var num_layer_query = 0;

$(function () {


    var div = $("#tableattr-container");
    var div_header = $("#tableattr-header");
    div_header.mousedown(function() {
        div.css('opacity', 0.4);
        $( function() {
            $( "#tableattr-container").draggable();
        } );
    });

    div.mouseup(function() {
        div.css('opacity', 1);

    })

    $( function() {
        div.resizable();
    } );

});


function closeTable() {
    $("#tableattr-container").css('visibility', 'hidden');
    $("#content-div-tables").empty();
    $("#ul-content-ref").empty();
    num_layer_query = 0;
}

function showTable() {
    $("#tableattr-container").css('visibility', 'visible');

}


/*function creatTableAttr(content){
    showTable();
    $("#content-div-tables").empty();
    $("#ul-content-ref").empty();
    createTableAttributes(content)
    //$.when($("#content-div-tables", "#ul-content-ref").empty()).then(createTableAttributes(content));
}*/


/*
    Recie la tabla de Atributos respondida desde Geoserver
 */

function createTableAttributes(tablecontent)
{



    //console.log(tablecontent);
    var tabla_prov = '<div id="tabla_prov" style="display: none;"></div>';
    $("#table-container").append(tabla_prov);
    $("#tabla_prov").append(tablecontent);
    var caption = $("#tabla_prov").find("table").find("caption").text();
    //Nombre que sera asignado al div que contiene las tablas
    var name_tab = caption + "_" + num_layer_query.toString();

    $("#tabla_prov").remove();

    if (caption !== "" && caption != null){


        //Creo el div con el nombre del tab
        var div_tab = '<div class="tab-pane" id="' + name_tab.toString() + '"> </div>'
        $("#content-div-tables").append(div_tab);
        if (num_layer_query === 1){

            $("#" + name_tab.toString()).addClass('active');
        }

        $("#" + name_tab.toString()).append(tablecontent);
        $("#" + name_tab.toString()).find("style").remove();
        $("#" + name_tab.toString()).find("table").addClass("table table-bordered table-hover")
        $("#" + name_tab.toString()).find("table").find("tbody").find("tr").find("th").attr('id', "tdinfotable");
        $("#" + name_tab.toString()).find("table").find("tbody").find("tr").find("td").attr('id', "tdinfotable");
        $("#" + name_tab.toString()).find("table").find("tbody").find("tr").find("td").css('vertical-align', "middle");

        //Agrego el li para que funcione

        var li = '<li id="li_' + name_tab.toString() + '"><a href="#' + name_tab.toString() + '" data-toggle="tab"> ' + caption.toString() + '</a></li>';

        $("#ul-content-ref").append(li);

        if (num_layer_query == 1){

            $("#li_" + name_tab.toString()).addClass('active');
        }
    } else {
        num_layer_query = num_layer_query - 1;
    }



}

$(function () {

    new ResizeSensor($("#tableattr-container"), function() {

        //Nuevo tamano
        var tam_header = $("#ul-content-ref").height();
        var tableattr_container = $("#tableattr-container").height();
        var box_header = $("#box-header").height();
        var tblattr_header = $("#tableattr-header").height();

        var nuevo = tableattr_container - tam_header;
        nuevo = nuevo - box_header;
        nuevo = nuevo - tblattr_header - 55;
        $("#content-div-tables").height(nuevo)
    });
    $("#tableattr-container").css('position', 'absolute');

});