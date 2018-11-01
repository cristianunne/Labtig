<?= $this->Html->script('index/index.js') ?>


<?= $this->element('header')?>
<?= $this->element('sidebar')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= $this->element('panel_header')?>
    <?= $this->Flash->render() ?>

    <section class="content">

        <div class="row">

            <?= $this->Form->create($layers) ?>
            <!-- left column -->
            <div class="col-md-6" style="float: none; margin: 0 auto">
                <!-- Form Element sizes -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar Layers</h3>
                    </div>
                    <div class="box-body">
                        <?= $this->Form->input('nombre', ['class' => 'form-control', 'placeholder' => 'Nombre', 'label' => 'Nombre:', 'required']) ?>
                        <br>

                        <?= $this->Form->input('urlservice', ['class' => 'form-control', 'placeholder' => 'Url de Servicio', 'label' => 'Url de Servicio:', 'required']) ?>
                        <br>

                        <?= $this->Form->input('layers', ['class' => 'form-control', 'placeholder' => 'Layers', 'label' => 'Layers:', 'required']) ?>
                        <br>

                        <?= $this->Form->input('styles', ['class' => 'form-control', 'placeholder' => 'Styles', 'label' => 'Styles:', 'required']) ?>
                        <br>

                        <?= $this->Form->input('format', ['class' => 'form-control', 'placeholder' => 'Formato', 'label' => 'Formato:', 'required']) ?>
                        <br>
                        <div class="form-group text">
                            <label for="transparent">Transparente?:</label>
                            <?= $this->Form->checkbox('transparent') ?>
                        </div>

                        <br>

                        <?= $this->Form->input('version', ['class' => 'form-control', 'placeholder' => 'Versión', 'label' => 'Versión:']) ?>
                        <br>

                        <?= $this->Form->input('crs', ['class' => 'form-control', 'placeholder' => 'CRS', 'label' => 'CRS:']) ?>
                        <br>
                        <div class="form-group text">
                            <label for="uppercase">Uppercase?:</label>
                            <?= $this->Form->checkbox('uppercase') ?>
                        </div>

                        <br>

                        <?= $this->Form->input('minzoom', ['class' => 'form-control', 'placeholder' => 'MinZoom', 'label' => 'MinZoom:']) ?>
                        <br>

                        <?= $this->Form->input('maxzoom', ['class' => 'form-control', 'placeholder' => 'MaxZoom', 'label' => 'MaxZoom:']) ?>
                        <br>

                        <?= $this->Form->input('opacity', ['type' => 'number', 'step' => '0.01', 'class' => 'form-control', 'placeholder' => 'Opacidad', 'label' => 'Opacidad:']) ?>
                        <br>

                        <?= $this->Form->input('attribution', ['class' => 'form-control', 'placeholder' => 'Atribuciones', 'label' => 'Atribuciones:']) ?>
                        <br>

                        <div class="form-group text">
                            <label for="activo">Activo?:</label>
                            <?= $this->Form->checkbox('activo', ['label' => 'Activo?:']) ?>
                        </div>

                        <br>
                        <?= $this->Form->input('escala_idescala', ['options' => $escalas, 'empty' => '(Elija una Escala)', 'type' => 'select',
                            'class' => 'form-control', 'placeholder' => 'Escala', 'label' => 'Escala:', 'required']) ?>

                        <br>
                        <?= $this->Form->input('categoria_idcategoria', ['options' => $categoriasCapas, 'empty' => '(Elija una Categoría)', 'type' => 'select',
                            'class' => 'form-control', 'placeholder' => 'Categoría', 'label' => 'Categoría:', 'required']) ?>

                    </div>

                    <div class="box-footer">
                        <?= $this->Form->button('Editar', ['class' => 'btn btn-primary pull-right']) ?>
                        <?= $this->Html->link('Volver', ['controller' => 'Layers', 'action' => 'index', '?' => ['Accion' => 'Ver Layers', 'Categoria' => 'Layers']],
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
