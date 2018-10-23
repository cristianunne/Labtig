<?= $this->Html->script('index/index.js') ?>


<?= $this->element('header')?>
<?= $this->element('sidebar')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= $this->element('panel_header')?>
    <?= $this->Flash->render() ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" style="color: #2981a2;">Lista de Layers</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive" >
                        <table id="example2" class="table table-bordered table-hover dataTable" style="font-size: smaller;">
                            <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('Id:') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Nombre:') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('URL Servicio') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Layers') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Styles') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Formato') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Transparente') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Versión') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('CRS') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Uppercase') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('MinZoom') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('MaxZoom') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Opacidad') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Atribución') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Escala') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Categoría') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Activo') ?></th>
                                <th scope="col"><?= __('Acciones') ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($layers as $capas): ?>
                                <tr>
                                    <td style="font-weight: bold; text-align: center; vertical-align: middle;"><?= h($capas->idlayer) ?></td>
                                    <td style="color: #2981a2; vertical-align: middle;"><?= h($capas->nombre) ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->urlservice) ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?= h($capas->layers) ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->styles) ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->format) ?></td>
                                    <?php if ($capas->transparent == 0): ?>
                                        <td style="text-align: center; vertical-align: middle;">No</td>
                                    <?php else: ?>
                                        <td style="text-align: center; vertical-align: middle;">Si</td>
                                    <?php endif; ?>
                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->version) ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->crs) ?></td>

                                    <?php if ($capas->uppercase == 0): ?>
                                        <td style="text-align: center; vertical-align: middle;">No</td>
                                    <?php else: ?>
                                        <td style="text-align: center; vertical-align: middle;">Si</td>
                                    <?php endif; ?>

                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->minzoom) ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->maxzoom) ?></td>
                                    <td style="text-align: center;"><?= h($capas->opacity) ?></td>

                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->attribution) ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->escalascapa->categoria) ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?= h($capas->categoria_idcategoria) ?></td>


                                    <?php if ($capas->activo == 0): ?>
                                        <td style="text-align: center; vertical-align: middle;">No</td>
                                    <?php else: ?>
                                        <td style="text-align: center; vertical-align: middle;">Si</td>
                                    <?php endif; ?>

                                    <td align="center" valign="middle">

                                        <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-edit', 'aria-hidden' => 'true']),
                                            ['controller' => 'Layers', 'action' => 'edit','?' => ['Accion' => 'Editar Capas Base', 'Categoria' => 'CapasBase', 'id' => $capas->idlayer]], ['class' => 'btn btn-warning', 'escape' => false]) ?>

                                        <?= $this->Form->postLink(__($this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-remove', 'aria-hidden' => 'true'])), ['action' => 'delete', $capas->idlayer],
                                            ['confirm' => __('Eliminar la Capa Base: {0}?', $capas->idcapasbase), 'class' => 'btn btn-danger', 'style' => 'margin-top: 5px', 'escape' => false]) ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>


                    </div>

                </div> <!--vid box-->


            </div>

        </div>
    </section>
</div>

<?= $this->element('footer')?>

<script>
    $(function () {

        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true,
        })
    })
</script>


