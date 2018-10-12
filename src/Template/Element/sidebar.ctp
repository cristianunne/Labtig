

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


                        <?= $this->Html->link('<i class="fa fa-eye"></i> Ver Configuraciones', ['controller' => 'Admin', 'action' => 'MapConfig'], ['escape' => false]) ?>
                    </li>
                </ul>

            </li>




        </ul>


    </section>
<!-- /.sidebar -->
</aside>