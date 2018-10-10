<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mapconfig Controller
 *
 * @property \App\Model\Table\MapconfigTable $Mapconfig
 */
class MapconfigController extends AppController
{



    public function index()
    {

        //Recupero los datos de la URL
        $data_url = $this->request->query;

        //Obtengo los datos de la tabla
        $mapaConfig = $this->Mapconfig->find('all', [])->first();


        $action = $data_url['Accion'];
        $categoria = $data_url['Categoria'];


        $this->set('action', $action);
        $this->set('categoria', $categoria);
        $this->set('mapaConfig', $mapaConfig);

    }

}
