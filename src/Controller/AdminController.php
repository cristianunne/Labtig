<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 */
class AdminController extends AppController
{


    public function index()
    {

        $this->render();

    }


    //Configuraciones del Mapa
    public function MapConfig()
    {
        return $this->redirect(['controller' => 'Mapconfig', 'action' => 'index', '?' => ['Accion' => 'Ver Confuguraciones de Mapa', 'Categoria' => 'Mapa']]);
    }

}
