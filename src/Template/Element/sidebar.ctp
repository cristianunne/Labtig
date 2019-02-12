

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

            <li id="li_Servicios" class="treeview">
                <a href="#">
                    <i class="fas fa-link"></i> <span>Servicios
                    </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-plus"></i> Agregar', ['controller' => 'Servicios', 'action' => 'add', '?' => ['Accion' => 'Ver Configuraciones de Servicios', 'Categoria' => 'Servicios']], ['escape' => false]) ?>
                    </li>
                    <li class="active">
                            <?= $this->Html->link('<i class="fa fa-eye"></i> Ver Servicios', ['controller' => 'Servicios', 'action' => 'index', '?' => ['Accion' => 'Ver Configuraciones de Servicios', 'Categoria' => 'Servicios']], ['escape' => false]) ?>
                    </li>

                </ul>

            </li>


            <li class="header">ADMINISTRACIÓN DE CAPAS</li>

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

                    <li class="active">

                        <?= $this->Html->link('<i class="fa fa-plus"></i> Capa Default', ['controller' => 'Capabasedefault', 'action' => 'index', '?' => ['Accion' => 'Default Capas Base', 'Categoria' => 'CapasBase']], ['escape' => false]) ?>
                    </li>
                </ul>

            </li>

            <li id="li_Layers" class="treeview">
                <a href="#">
                    <i class="fas fa-chess-board"></i><span> Layers</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-eye"></i> Ver', ['controller' => 'Layers', 'action' => 'index', '?' => ['Accion' => 'Ver Layers', 'Categoria' => 'Layers']], ['escape' => false]) ?>
                    </li>

                    <li class="active">


                        <?= $this->Html->link('<i class="fa fa-plus"></i> Agregar', ['controller' => 'Layers', 'action' => 'add', '?' => ['Accion' => 'Agregar Layers', 'Categoria' => 'Layers']], ['escape' => false]) ?>
                    </li>
                </ul>

            </li>


            <li class="header">CATEGORÍAS CAPAS</li>

            <li id="li_CatCapas" class="treeview">
                <a href="#">
                    <i class="fas fa-clone"></i><span> Categorìas Temáticas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-eye"></i> Ver', ['controller' => 'Categoriascapas', 'action' => 'index', '?' => ['Accion' => 'Ver Categorìas Temàticas de Capas', 'Categoria' => 'CatCapas']], ['escape' => false]) ?>
                    </li>

                    <li class="active">


                        <?= $this->Html->link('<i class="fa fa-plus"></i> Agregar', ['controller' => 'Categoriascapas
                        ', 'action' => 'add', '?' => ['Accion' => 'Agregar Categorìas Temàticas de Capas', 'Categoria' => 'CatCapas']], ['escape' => false]) ?>
                    </li>
                </ul>

            </li>

            <li id="li_Escalas" class="treeview">
                <a href="#">
                    <i class="far fa-clone"></i><span> Escalas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-eye"></i> Ver', ['controller' => 'Escalascapas', 'action' => 'index', '?' => ['Accion' => 'Ver Escalas de Capas', 'Categoria' => 'Escalas']], ['escape' => false]) ?>
                    </li>

                    <li class="active">


                        <?= $this->Html->link('<i class="fa fa-plus"></i> Agregar', ['controller' => 'Escalascapas
                        ', 'action' => 'add', '?' => ['Accion' => 'Agregar Escalas de Capas', 'Categoria' => 'Escalas']], ['escape' => false]) ?>
                    </li>
                </ul>

            </li>

        </ul>

    </section>
<!-- /.sidebar -->
</aside>