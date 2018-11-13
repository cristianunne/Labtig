L.TileLayer.BetterWMS = L.TileLayer.WMS.extend({

    onAdd: function (map) {
        // Triggered when the layer is added to a map.
        //   Register a click listener, then do all the upstream WMS things
        L.TileLayer.WMS.prototype.onAdd.call(this, map);
        map.on('click', this.getFeatureInfo, this);
    },

    onRemove: function (map) {
        // Triggered when the layer is removed from a map.
        //   Unregister a click listener, then do all the upstream WMS things
        L.TileLayer.WMS.prototype.onRemove.call(this, map);
        map.off('click', this.getFeatureInfo, this);
    },

    getFeatureInfo: function (evt) {
        // Make an AJAX request to the server and hope for the best
        var url = this.getFeatureInfoUrl(evt.latlng),
            showResults = L.Util.bind(this.showGetFeatureInfo, this);


        $.ajax({
            url: 'index/getAttribute',
            data: {"url" : url.toString()},
            beforeSend: function(xhr)
            {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            success: function (data, status, xhr) {
                var err = typeof data === 'string' ? null : data;
                showResults(evt.latlng, data);
            },
            error: function (xhr, status, error) {
                showResults(error);
            }
        });

        /*$.ajax({
            url: url,
            type: "GET",
            contentType: "application/json",
            dataType : 'jsonp',
            beforeSend: function(xhr)
            {
                xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
                xhr.setRequestHeader("Access-Control-Allow-Methods", "POST, GET, OPTIONS, PUT, DELETE");
            },

            success: function (data, status, xhr) {
                var err = typeof data === 'string' ? null : data;
                showResults(err, evt.latlng, data);
            },
            error: function (xhr, status, error) {
                showResults(error);
            }
        });*/
    },



    getFeatureInfoUrl: function (latlng) {
        // Construct a GetFeatureInfo request URL given a point
        var point = this._map.latLngToContainerPoint(latlng, this._map.getZoom()),
            size = this._map.getSize(),

            params = {
                request: 'GetFeatureInfo',
                service: 'WMS',
                srs: 'EPSG:4326',
                styles: this.wmsParams.styles,
                transparent: this.wmsParams.transparent,
                version: this.wmsParams.version,
                format: this.wmsParams.format,
                bbox: this._map.getBounds().toBBoxString(),
                height: size.y,
                width: size.x,
                layers: this.wmsParams.layers,
                query_layers: this.wmsParams.layers,
                info_format: 'text/html'
            };

        params[params.version === '1.3.0' ? 'i' : 'x'] = point.x;
        params[params.version === '1.3.0' ? 'j' : 'y'] = point.y;

        return this._url + L.Util.getParamString(params, this._url, true);
    },

    showGetFeatureInfo: function (latlng, content) {

        //var caption = $(content).find("table").find("caption").val();
        //console.log(caption);
        // Otherwise show the content in a popup, or something.
        var tabla_prov = '<div id="tabla_prov" style="display: none;"></div>';
        $("#table-container").append(tabla_prov);
        $("#tabla_prov").append(content);
        var caption = $("#tabla_prov").find("table").find("caption").text();

        //Con el Caption me encargo de pasparle a la pestaña para que construya el panel


        $("#context-table").append(content);
        $("#context-table").find("style").remove();
        $("#context-table").find("table").addClass("table table-bordered table-hover")
        $("#context-table").find("table").find("tbody").find("tr").find("th").attr('id', "tdinfotable");
        $("#context-table").find("table").find("tbody").find("tr").find("td").attr('id', "tdinfotable");
        $("#context-table").find("table").find("tbody").find("tr").find("td").css('vertical-align', "middle");
    }
});





L.tileLayer.betterWms = function (url, options) {
    return new L.TileLayer.BetterWMS(url, options);
};
