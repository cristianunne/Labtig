

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php echo $this->Html->image('avatar5.png', ["alt" => 'User Image' , "class" => 'img-circle user-image']) ?>
            </div>
            <div class="pull-left info">
                <p>Cristian</p>
                <a href="#"><i class="fa fa-circle text-success"></i> En Línea</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">INICIO</li>

            <li>

                <?= $this->Html->link('<i class="fa fa-home"></i> Inicio', ['controller' => 'Admin', 'action' => 'index'], [ 'escape' => false]) ?>
            </li>

            <li class="header">CONFIGURACIONES GENERALES</li>

            <li id="li_Mapa" class="treeview">
                <a href="#">
                    <i class="fa fa-map"></i> <span>Mapa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-eye"></i> Ver Configuraciones', ['controller' => 'Mapconfig', 'action' => 'index', '?' => ['Accion' => 'Ver Configuraciones de Mapa', 'Categoria' => 'Mapa']], ['escape' => false]) ?>
                    </li>

                    <li class="active">


                        <?= $this->Html->link('<i class="fa fa-edit"></i> Editar Configuraciones', ['controller' => 'Mapconfig', 'action' => 'add', '?' => ['Accion' => 'Editar Configuraciones de Mapa', 'Categoria' => 'Mapa']], ['escape' => false]) ?>
                    </li>
                </ul>

            </li>

            <li id="li_CapasBase" class="treeview">
                <a href="#">
                    <i class="fas fa-dot-circle"></i><span> Capas Base</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-eye"></i> Ver', ['controller' => 'Capasbase', 'action' => 'index', '?' => ['Accion' => 'Ver Capas Base', 'Categoria' => 'CapasBase']], ['escape' => false]) ?>
                    </li>

                    <li class="active">


                        <?= $this->Html->link('<i class="fa fa-plus"></i> Agregar', ['controller' => 'Capasbase', 'action' => 'add', '?' => ['Accion' => 'Agregar Capas Base', 'Categoria' => 'CapasBase']], ['escape' => false]) ?>
                    </li>
                </ul>

            </li>

        </ul>

    </section>
<!-- /.sidebar -->
</aside>