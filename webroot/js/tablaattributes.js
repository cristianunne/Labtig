



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
}