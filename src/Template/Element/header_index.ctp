<header class="main-header" xmlns:margin-top="http://www.w3.org/1999/xhtml">
    <!-- Logo -->
    <a href="http://www.pindosa.com.ar/es/index_interior.php" target="_blank" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>LABTIG</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>LABTIG</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" onclick="toogleButton()">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <!-- User image top-->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <?php echo $this->Html->image('mapa_base.png', ["alt" => 'Capas Base' , "class" => 'img-rounded user-image']) ?>

                        <span class="hidden-xs">
                            Capas Base
                        </span>
                    </a>

                    <!-- User Body COntextual-->
                    <ul class="dropdown-menu" style="max-height: 95vh; overflow:scroll">

                            <!-- DEBO GENERAR LA CANTIDAD DE LI SEGUN LA LISTA DE MAPAS BASE QUE HAYA-->

                        <?php $i = 1;?>

                        <?php foreach ($capasbase as $capabase): ?>

                            <li style="min-height: 50px; margin-top: 15px; padding: 5px 5px 5px 5px;">
                                <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
                                    <div class="row" style="margin-left: 0px; margin-right: 0px;">
                                        <div class="col-md-3" style="padding-right: 0px; padding-left: 0px;">
                                            <div id="<?= h("mapa_". $i) ?>" attr="<?= h($capabase->idcapasbase) ?>" style="width: 50px; height: 50px; float: left;">
                                            </div>
                                        </div>
                                        <div class="col-md-8" style="padding-right: 0px; padding-left: 0px;">
                                            <p style="margin-top: 15px;"><?= h($capabase->nombre) ?></p>
                                        </div>

                                        <div class="col-md-1" style="padding-right: 0px; padding-left: 0px;">
                                            <input id="radio_<?= h($capabase->idcapasbase) ?>" attr="<?= h($capabase->idcapasbase) ?>" type="radio" classname="<?= h($capabase->nombre) ?>" name="capasbase" class="pull-right" value="<?= h($capabase->urlservice) ?>" style="margin-top: 15px;" onclick="capasBaseManager(this)">
                                        </div>

                                    </div>
                                </div>

                            </li>
                            <?php $i = $i + 1;?>
                        <?php endforeach; ?>

                        <!-- Agrego un item de ninguno-->
                        <li style="min-height: 50px; margin-top: 15px; padding: 5px 5px 5px 5px;">
                            <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
                                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                                    <div class="col-md-3" style="padding-right: 0px; padding-left: 0px;">
                                        <div id="<?= h("mapa_no") ?>" attr="no_map" style="width: 50px; height: 50px; float: left;">
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="padding-right: 0px; padding-left: 0px;">
                                        <p style="margin-top: 15px;"><?= h('Ninguno') ?></p>
                                    </div>

                                    <div class="col-md-1" style="padding-right: 0px; padding-left: 0px;">
                                        <input id="radio_nomap" attr="radio_nomap" type="radio" name="capasbase" class="pull-right" value="no_map" style="margin-top: 15px;" onclick="capasBaseManager(this)">
                                    </div>

                                </div>
                            </div>

                        </li>


                    </ul>
                </li>
            </ul>
        </div>

        <a href="#" class="sidebar-toggle" data-toggle="" role="button" onclick="toogleDescription()" style="float: right;">
            <span class="sr-only">Otro Boton</span>
        </a>


    </nav>
</header>
