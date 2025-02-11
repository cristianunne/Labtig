<?= $this->Html->script('index/index.js') ?>
<?= $this->Html->script('li_change.js') ?>


<?= $this->element('header')?>
<?= $this->element('sidebar')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= $this->element('panel_header')?>
    <?= $this->Flash->render() ?>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <?= $this->Form->create($escalascapas) ?>

            <div class="col-md-4" style="float: none; margin: 0 auto">
                <div class="callout callout-success">
                    <h4>Recomendaciones</h4>

                    <p>Mantener un CRITERIO de tipeo en las categorías. todas MAYÚSCULAS, todas minúsculas, o bien Mayúscula inicial.</p>
                </div>
                <!-- Form Element sizes -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Escalas de Capas</h3>
                    </div>
                    <div class="box-body">
                        <?= $this->Form->input('categoria', ['class' => 'form-control', 'placeholder' => 'Categoría', 'label' => false, 'required']) ?>
                        <br>
                    </div>

                    <div class="box-footer">
                        <?= $this->Form->button('Agregar', ['class' => 'btn btn-success pull-right']) ?>
                        <?= $this->Html->link('Volver', ['controller' => 'Escalascapas', 'action' => 'index', '?' => ['Accion' => 'Ver Escalas de Capas', 'Categoria' => 'Escalas']],
                            ['class' => 'btn btn-default pull-left'], ['escape' => false]) ?>

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