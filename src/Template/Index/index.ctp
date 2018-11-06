<?= $this->Html->script('index/indexmap.js') ?>

<?= $this->Html->css('leaflet') ?>
<?= $this->Html->css('leaflet-overview') ?>
<?= $this->Html->css('icons') ?>
<?= $this->Html->css('sidebar-index') ?>
<?= $this->Html->css('menu_controls') ?>
<?= $this->Html->css('tableattribute') ?>
<?= $this->Html->css('jquery-ui') ?>

<?= $this->Html->script('leaflet/leaflet.js') ?>
<?= $this->Html->script('leaflet/leaflet-overview.js') ?>
<?= $this->Html->script('loadingsetting.js') ?>
<?= $this->Html->script('leaflet/menucontrols') ?>
<?= $this->Html->script('tablaattributes') ?>

<?= $this->Html->script('jquery-ui') ?>

<?= $this->element('header_index')?>
<?= $this->element('sidebar_index')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content" style="padding: 0px 0px 0px 0px;">
        <div class="div-content-menu-control">
            <div id="div-info-content" style="display: inline-block;">
                <button type="submit" class="btn btn-default btn-menu-controls" name="info" onclick="getInfoByClick(this)" onmouseleave="onmouseleavefunction()"><i class="info-ico"></i></button>
            </div>

        </div>
        <div id="mapid" style="width: 100%; min-height: 85.5vh !important; height: 85.5vh;">

        </div>
    </section>

</div>

<?= $this->element('tableattribute')?>
<?= $this->element('footer')?>
