

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">CAPAS TEMÁTICAS</li>


            <li id="li_Mapa" class="treeview">
                <a href="#" id="ahref-menu">
                    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; margin-right: -2px; margin-left: -2px;">
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div class="col-md-2">
                                <i class="ico"></i>
                            </div>
                            <div class="col-md-10" style="margin-top: 5px;">
                                <span> Ambiente</span>
                            </div>
                        </div>

                    </div>


                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-eye"></i> Ver Configuraciones', ['controller' => 'Mapconfig', 'action' => 'index', '?' => ['Accion' => 'Ver Configuraciones de Mapa', 'Categoria' => 'Mapa']], ['escape' => false]) ?>
                    </li>

                    <li class="treeview menu-open">
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li class="treeview menu-open">
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                </a>
                                <ul class="treeview-menu" style="display: block;">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </li>


        </ul>

    </section>
<!-- /.sidebar -->
</aside>