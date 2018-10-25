

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu ul-sidebar" data-widget="tree">

            <li class="header">CAPAS TEMÁTICAS</li>

            <?php foreach ($categoriascapas as $catcapas): ?>

                    <?php if($catcapas->categoria == "Capas Base"): ?>
                        <li id="li_Mapa" class="treeview">
                        <a href="#" id="ahref-menu">
                            <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; margin-right: -2px; margin-left: -2px;">
                                <div class="row" style="margin-right: 0px; margin-left: 0px;">
                                    <div class="col-md-2">
                                        <i class="ico"></i>
                                    </div>
                                    <div class="col-md-10 text-categoria" style="margin-top: 5px;">
                                        <span> <?= h($catcapas->categoria) ?></span>
                                    </div>
                                </div>

                            </div>

                            <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                        </a>

                        <!-- VIENE EL UL QUE CONTIENE LAS ESCALAS-->
                        <ul class="treeview-menu">

                            <?php foreach ($escalascapas as $escalas): ?>


                                <li class="treeview menu-open">
                                    <a href="#"><i class="escala"></i> <p class="text-a-li" style="margin: 0 0 0 20px;"><?= h(" ".$escalas->categoria) ?></p>
                                        <span class="pull-right-container">
                                                <i class="fa fa-angle-left pull-right"></i>
                                            </span>
                                    </a>

                                    <!-- VAN LAS CAPAS PROPIAMENTE DICHAS-->
                                    <ul class="treeview-menu" style="display: block;">

                                        <?php foreach ($layers as $layer): ?>

                                            <?php if($layer->categoria_idcategoria == $catcapas->idcategoriacapa): ?>

                                                <?php if($layer->escala_idescala == $escalas->idescala): ?>


                                                    <li><a href="#"><input id="<?= h("overlay".$layer->idlayer) ?>" type="checkbox" name="<?= h($layer->nombre) ?>"
                                                                           class="pull-left" style="margin: 0">
                                                            <p class="text-a-li" style="margin: 0 0 0 20px">
                                                                <?= h($layer->nombre) ?> </p>
                                                        </a></li>

                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php  endforeach; ?>


                                    </ul>
                                </li>

                            <?php endforeach; ?>
                        </ul>

                    </li>
                    <?php endif; ?>
            <?php endforeach; ?>

            <?php foreach ($categoriascapas as $catcapas): ?>

                <?php if($catcapas->categoria != "Capas Base"): ?>
                    <li id="li_Mapa" class="treeview">
                        <a href="#" id="ahref-menu">
                            <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; margin-right: -2px; margin-left: -2px;">
                                <div class="row" style="margin-right: 0px; margin-left: 0px;">
                                    <div class="col-md-2">
                                        <i class="ico"></i>
                                    </div>
                                    <div class="col-md-10 text-categoria" style="margin-top: 5px;">
                                        <span> <?= h($catcapas->categoria) ?></span>
                                    </div>
                                </div>

                            </div>

                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>

                        <!-- VIENE EL UL QUE CONTIENE LAS ESCALAS-->
                        <ul class="treeview-menu">

                            <?php foreach ($escalascapas as $escalas): ?>

                                <li class="treeview menu-open">
                                    <a href="#"><i class="escala"></i> <p class="text-a-li" style="margin: 0 0 0 20px;"><?= h(" ".$escalas->categoria) ?></p>
                                        <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                    </a>

                                    <!-- VAN LAS CAPAS PROPIAMENTE DICHAS-->
                                    <ul class="treeview-menu" style="display: block;">

                                        <?php foreach ($layers as $layer): ?>

                                            <?php if($layer->categoria_idcategoria == $catcapas->idcategoriacapa): ?>

                                                <?php if($layer->escala_idescala == $escalas->idescala): ?>

                                                    <li><a href="#"><i class="fa fa-circle-o"></i> <?= h($layer->nombre) ?> </a></li>

                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php  endforeach; ?>


                                    </ul>
                                </li>

                            <?php endforeach; ?>
                        </ul>

                    </li>

                <?php endif; ?>

            <?php endforeach; ?>

        </ul>

    </section>
<!-- /.sidebar -->
</aside>