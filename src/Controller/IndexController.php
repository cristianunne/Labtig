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
        //debug($mapConfigData);
        $this->render();
    }


    /*
     * Metodo consultado por la post para obtener los datos iniciales del configuracion
     */
    public function getConfigMap()
    {
        $this->layout = null;
        $this->autoRender = false;

        if ($this->request->is('ajax')) {

            //Ingreso a la base de datos y traigo los parametro de configuracion
            $tablaMapConfig = $this->loadModel('Mapconfig');
            $mapConfigData = $tablaMapConfig->find('all')->first();

            $res = [
                'dataconfig' => $mapConfigData
            ];

            return $this->json($res);

        }

    }

    public function simpleAction()
    {

        $this->layout = null;
        $this->autoRender = false;

        if ($this->request->is('ajax')) {

            // result can be anything coming from $this->data
            $result =  'Hello Dolly!';
            $this->set("result", $result);

            $res = [
                'dataconfig' => [
                  'nombre' => $result
                ]
            ];
            return $this->json($res);
        }
    }

}
