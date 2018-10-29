

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <div class="div-contenerdor-ul">
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


                                                        <li><a href="#"><input id="<?= h("overlay_".$layer->idlayer) ?>" type="checkbox" name="<?= h($layer->nombre) ?>"
                                                                               idlayer="<?= h($layer->idlayer) ?>" onclick="overlaylayermanager(this)"
                                                                               parent="<?= h($catcapas->categoria) ?>"
                                                                               escala="<?= h($escalas->categoria) ?>"
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

                                                        <li><a href="#"><input id="<?= h("overlay_".$layer->idlayer) ?>" type="checkbox" name="<?= h($layer->nombre) ?>"
                                                                               idlayer="<?= h($layer->idlayer) ?>" onclick="overlaylayermanager(this)"
                                                                               parent="<?= h($catcapas->categoria) ?>"
                                                                               escala="<?= h($escalas->categoria) ?>"
                                                                               class="pull-left" style="margin: 0">
                                                                <p class="text-a-li" style="margin: 0 0 0 20px">
                                                                    <?= h($layer->nombre)."una prubea de uinicoasdjasd" ?> </p>
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

            </ul>

        </div>



        <!-- REFERENCIAS-->
        <div class="div-contenerdor-ul-down">
            <ul id="ul-reference-container li-reference-none" class="sidebar-menu ul-sidebar" data-widget="tree">
                <li class="header">REFERENCIAS</li>

                <?php foreach ($categoriascapas as $catcapas): ?>

                    <?php if($catcapas->categoria == "Capas Base"): ?>
                        <li id="li_Mapa" class="li-reference-none">
                            <a href="#" id="ahref-menu">
                                <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; margin-right: -2px; margin-left: -2px;">
                                    <div class="row" style="margin-right: 0px; margin-left: 0px;">
                                        <div class="col-md-2">
                                            <i class="legend-ico"></i>
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
                            <ul class="treeview-menu" style="display: block;">

                                <?php foreach ($escalascapas as $escalas): ?>

                                    <?php foreach ($layers as $layer): ?>

                                        <?php if($layer->categoria_idcategoria == $catcapas->idcategoriacapa): ?>

                                            <?php if($layer->escala_idescala == $escalas->idescala): ?>

                                                <?php $url_image =  'http://localhost:8080/geoserver/wms?REQUEST=GetLegendGraphic&VERSION=1.0.0&FORMAT=image/png&WIDTH=20&HEIGHT=20&LAYER='.$layer->layers.'&width="127" height="120"'?>


                                                    <li class="treeview menu-open">
                                                        <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; margin-right: -2px; margin-left: -2px;">
                                                            <div class="row" style="margin-right: 0px; margin-left: 0px; padding-left: 30px;">
                                                                <div class="col-md-2" style="margin-right: 0px; margin-left: 0px; padding-right: 0; padding-left: 0;">
                                                                    <?php echo $this->Html->image($url_image, ["alt" => '' , "class" => 'img-rounded img-responsive', 'style' => 'height: 1.5em; width: 1.5em;']) ?>

                                                                </div>
                                                                <div class="col-md-10" style="margin-top: 5px; padding-left: 0px;">
                                                                    <span> <?= h($layer->nombre) ?></span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php  endforeach; ?>

                                <?php endforeach; ?>
                            </ul>

                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php foreach ($categoriascapas as $catcapas): ?>

                    <?php if($catcapas->categoria != "Capas Base"): ?>
                        <li id="li_Mapa" class="li-reference-none">
                            <a href="#" id="ahref-menu">
                                <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; margin-right: -2px; margin-left: -2px;">
                                    <div class="row" style="margin-right: 0px; margin-left: 0px;">
                                        <div class="col-md-2">
                                            <i class="legend-ico"></i>
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
                            <!-- VIENE EL UL QUE CONTIENE LAS ESCALAS-->
                            <ul class="treeview-menu" style="display: block;">

                                <?php foreach ($escalascapas as $escalas): ?>

                                    <?php foreach ($layers as $layer): ?>

                                        <?php if($layer->categoria_idcategoria == $catcapas->idcategoriacapa): ?>

                                            <?php if($layer->escala_idescala == $escalas->idescala): ?>

                                                <?php $url_image =  'http://localhost:8080/geoserver/wms?REQUEST=GetLegendGraphic&VERSION=1.0.0&FORMAT=image/png&WIDTH=20&HEIGHT=20&LAYER='.$layer->layers.'&width="127" height="120"'?>


                                                <li class="treeview menu-open">
                                                    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; margin-right: -2px; margin-left: -2px;">
                                                        <div class="row" style="margin-right: 0px; margin-left: 0px; padding-left: 30px;">
                                                            <div class="col-md-2" style="margin-right: 0px; margin-left: 0px; padding-right: 0; padding-left: 0;">
                                                                <?php echo $this->Html->image($url_image, ["alt" => '' , "class" => 'img-rounded img-responsive', 'style' => 'height: 1.5em; width: 1.5em;']) ?>

                                                            </div>
                                                            <div class="col-md-10" style="margin-top: 5px; padding-left: 0px;">
                                                                <span> <?= h($layer->nombre) ?></span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php  endforeach; ?>

                                <?php endforeach; ?>
                            </ul>

                        </li>

                    <?php endif; ?>

                <?php endforeach; ?>


            </ul>
        </div>





    </section>
<!-- /.sidebar -->
</aside>