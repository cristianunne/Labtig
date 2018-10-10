<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Index Controller
 *
 */
class IndexController extends AppController
{


    public function index()
    {

        //Cargo la Tabla mapConfig para traer los parametros de inicializaciòn del Map
        $tablaMapConfig = $this->loadModel('Mapconfig');
        $mapConfigData = $tablaMapConfig->find('all')->first();
        debug($mapConfigData);
        $this->render();
    }



}
