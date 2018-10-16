

 <?= $this->Html->css('panel_header.css') ?>
 <!-- Content Header (Page header) -->
<section class="content-header">

    <!-- Agregp un condicional para saber que hacer -->
    <?php if($categoria == 'Mapa'):  ?>

      <h1>
        Mapa
        <small>Configuraciones del Mapa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-map"></i> Mapa</a></li>

        <li class="active"><?php echo $action ?></li>
      </ol>

      <?php endif ?>


    <?php if($categoria == 'CapasBase'):  ?>

        <h1>
            Mapa
            <small>Configuraciones de las Capas Base</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-dot-circle"></i> Mapa</a></li>

            <li class="active"><?php echo $action ?></li>
        </ol>

    <?php endif ?>

</section>
