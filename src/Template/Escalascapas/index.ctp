<?= $this->Html->script('index/index.js') ?>


<?= $this->element('header')?>
<?= $this->element('sidebar')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= $this->element('panel_header')?>
    <?= $this->Flash->render() ?>
    <section class="content">
        <div class="row">
            <div class="col-md-3" style="float: none;margin: 0 auto;">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de Escalas de Capas</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover dataTable">
                            <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('Categoría') ?></th>
                                <th scope="col"><?= __('Acciones') ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($escalascapas as $cat): ?>
                                <tr>
                                    <td style="vertical-align: middle"><?= h($cat->categoria) ?></td>

                                    <td align="center" valign="middle">

                                        <?= $this->Html->link(__($this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-edit', 'aria-hidden' => 'true'])), ['action' => 'edit','?' =>
                                            ['Accion' => 'Editar Escalas', 'Categoria' => 'Escalas', 'id' => $cat->idescala]],
                                            ['class' => 'btn btn-warning', 'escape' => false]) ?>

                                        <?= $this->Form->postLink(__($this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-remove', 'aria-hidden' => 'true'])), ['action' => 'delete', $cat->idescala],
                                            ['confirm' => __('Eliminar la Escala: {0}?', $cat->categoria), 'class' => 'btn btn-danger', 'escape' => false]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>


                    </div>

                </div>
            </div>

        </div>
    </section>
</div>
<?= $this->element('footer')?>