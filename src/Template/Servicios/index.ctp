<?= $this->Html->script('index/index.js') ?>


<?= $this->element('header')?>
<?= $this->element('sidebar')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= $this->element('panel_header')?>
    <?= $this->Flash->render() ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-8 col-sm-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" style="color: #2981a2;">Lista de Servicios</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive" >
                        <table id="example2" class="table table-bordered table-hover dataTable" style="font-size: smaller;">
                            <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('Id:') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Nombre:') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('URL Servicio') ?></th>
                                <th scope="col"><?= __('Acciones') ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($servicios as $serv): ?>
                                <tr>
                                    <td style="font-weight: bold; text-align: center; vertical-align: middle;"><?= h($serv->idservicios) ?></td>
                                    <td style="color: #2981a2; vertical-align: middle;"><?= h($serv->nombre) ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?= h($serv->url_servicio) ?></td>

                                    <td align="center" valign="">

                                        <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-edit', 'aria-hidden' => 'true']),
                                            ['controller' => 'Layers', 'action' => 'edit','?' => ['Accion' => 'Editar Capas Base', 'Categoria' => 'CapasBase', 'id' => $serv->idservicios]], ['class' => 'btn btn-warning', 'escape' => false]) ?>

                                        <?= $this->Form->postLink(__($this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-remove', 'aria-hidden' => 'true'])), ['action' => 'delete', $serv->idlayer],
                                            ['confirm' => __('Eliminar la Capa Base: {0}?', $serv->idservicios), 'class' => 'btn btn-danger', 'escape' => false]) ?>

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
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
            'pageLength' : 50
        })
    })
</script>


