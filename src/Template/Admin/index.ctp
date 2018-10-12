
<?= $this->Html->script('index/index.js') ?>


<?= $this->Html->css('leaflet') ?>
<?= $this->Html->script('leaflet/leaflet.js') ?>
<?= $this->Html->script('loadingsetting.js') ?>


<?= $this->element('header')?>
<?= $this->element('sidebar')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= $this->Flash->render() ?>

    <section class="content">
        <div id="mapid" style="min-height: 90vh !important; height: 90vh;">

        </div>

    </section>

</div>

<?= $this->element('footer')?>
