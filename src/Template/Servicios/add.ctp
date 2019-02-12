<?= $this->Html->script('index/index.js') ?>


<?= $this->element('header')?>
<?= $this->element('sidebar')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= $this->element('panel_header')?>
    <?= $this->Flash->render() ?>

    <section class="content">

        <div class="row">

            <?= $this->Form->create($servicio) ?>
            <!-- left column -->
            <div class="col-md-6" style="float: none; margin: 0 auto">
                <!-- Form Element sizes -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Servicios</h3>
                    </div>
                    <div class="box-body">
                        <?= $this->Form->input('nombre', ['class' => 'form-control', 'placeholder' => 'Nombre', 'label' => 'Nombre:', 'required']) ?>
                        <br>

                        <?= $this->Form->input('url_servicio', ['class' => 'form-control', 'placeholder' => 'Url de Servicio', 'label' => 'Url de Servicio:', 'required']) ?>
                        <br>


                    </div>

                    <div class="box-footer">
                        <?= $this->Form->button('Agregar', ['class' => 'btn btn-primary pull-right']) ?>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <?= $this->Form->end() ?>
        </div>

    </section>
</div>

<?= $this->element('footer')?>
