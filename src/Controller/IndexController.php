<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Index Controller
 *
 */
class IndexController extends AppController
{

    /*
     * Permite el Ingreso a Esta accion sin necesidad de especificar el componente de Autentificacion
     */
    public function beforeFilter(\Cake\Event\Event $event)
    {
        // allow all action
        $this->Auth->allow();
    }

    public function index()
    {

        //Cargo la Tabla mapConfig para traer los parametros de inicializaciòn del Map
        $tablaMapConfig = $this->loadModel('Mapconfig');
        $mapConfigData = $tablaMapConfig->find('all')->first();
        //debug($mapConfigData);
        $this->render();


        $this->Cookie->write('usuario_id', 10);
        $this->Cookie->write('usuario_nombre', 'hugo');
    }


    /*
     * Metodo consultado por la post para obtener los datos iniciales del configuracion
     */
    public function getConfigMap()
    {
        //Traio todas las configuraciones necesarias


        $this->layout = null;
        $this->autoRender = false;

        if ($this->request->is('ajax')) {

            //Ingreso a la base de datos y traigo los parametro de configuracion
            $tablaMapConfig = $this->loadModel('Mapconfig');
            $mapConfigData = $tablaMapConfig->find('all')->first();


            $tablaCapasBase = $this->loadModel('Capasbase');
            $capasbase = $tablaCapasBase->find('all');


            //Recorro los nombres de las capas base y creo un arreglo



            $res = [
                'dataconfig' => $mapConfigData,
                'capasbase' => $capasbase
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
