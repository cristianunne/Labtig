

<?= $this->Html->css('leaflet') ?>
<?= $this->Html->css('icons') ?>
<?= $this->Html->script('leaflet/leaflet.js') ?>
<?= $this->Html->script('loadingsetting.js') ?>

<?= $this->element('header_index')?>
<?= $this->element('sidebar_index')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content" style="padding: 0px 0px 0px 0px;">
        <div id="mapid" style="min-height: 90vh !important; height: 90vh;">

        </div>
    </section>

</div>

<?= $this->element('footer')?>
