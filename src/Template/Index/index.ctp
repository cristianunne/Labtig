<?= $this->Html->script('index/indexmap.js') ?>

<?= $this->Html->css('leaflet') ?>
<?= $this->Html->css('leaflet-overview') ?>
<?= $this->Html->css('icons') ?>
<?= $this->Html->css('sidebar-index') ?>
<?= $this->Html->css('menu_controls') ?>
<?= $this->Html->css('tableattribute') ?>
<?= $this->Html->css('jquery-ui') ?>
<?= $this->Html->css('index_map') ?>

<?= $this->Html->script('leaflet/leaflet.js') ?>
<?= $this->Html->script('leaflet/L.TileLayer.BetterWMS.js') ?>
<?= $this->Html->script('leaflet/leaflet-overview.js') ?>
<?= $this->Html->script('loadingsetting.js') ?>
<?= $this->Html->script('leaflet/menucontrols') ?>
<?= $this->Html->script('tablaattributes') ?>
<?= $this->Html->script('ResizeSensor') ?>
<?= $this->Html->script('ElementQueries') ?>

<?= $this->Html->script('jquery-ui') ?>

<?= $this->element('header_index')?>
<?= $this->element('sidebar_index')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section id="section_content" class="content" style="padding: 0px 0px 0px 0px;">
        <div class="div-content-menu-control">
            <div id="div-info-content" attr="Información del elemento" style="display: inline-block;" onmouseenter="showEtiquetaInfo(this)" onmouseleave="closeEtiquetaInfo(this)">
                <button type="submit" class="btn btn-default btn-menu-controls" name="info" onclick="getInfoByClick(this)" onmouseleave="onmouseleavefunction()">
                    <i class="info-ico"></i></button>
            </div>

        </div>

        <div id="map-description-content">
            <div id="map-content">

                <div id="mapid" style="min-height: 85.5vh !important; height: 85.5vh;">

                </div>

            </div>

            <div id="description-content" style="display: none;">

                <div id="content-writer">
                    Div de la descripcion
                    Div de la descripcion
                </div>

            </div>
        </div>




    </section>

</div>

<?= $this->element('tableattribute')?>
<?= $this->element('footer')?>
