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
        $this->response->header('Access-Control-Allow-Origin', '*');
    }


    public function index()
    {

        //Cargo la Tabla mapConfig para traer los parametros de inicializaciòn del Map
        $tablaMapConfig = $this->loadModel('Mapconfig');
        $mapConfigData = $tablaMapConfig->find('all')->first();
        //debug($mapConfigData);

        //En ambos casos deberia filtrar por el campo activo
        $tablaCapasBase = $this->loadModel('Capasbase');
        $capasbase = $tablaCapasBase->find('all');

        //Traigo los datos para xrear el sidebar
        //Categoriascapas
        $tablaCategoriascapas = $this->loadModel('Categoriascapas');
        $categoriascapas = $tablaCategoriascapas->find('all')->order(['categoria' => 'ASC']);
        $this->set(compact('categoriascapas'));

        $this->set(compact('capasbase'));

        //Traigo las escalas
        $tablaEscalas = $this->loadModel('Escalascapas');
        $escalascapas = $tablaEscalas->find('all')->order(['categoria' => 'ASC']);
        $this->set(compact('escalascapas'));


        //Traigo los layers, u overlay capas
        $tablaLayers = $this->loadModel('Layers');
        $layers = $tablaLayers->find()->where(['activo' => true])->order(['nombre' => 'ASC']);
        $this->set(compact('layers'));

        $this->render();

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


            //En ambos casos deberia filtrar por el campo activo
            $tablaCapasBase = $this->loadModel('Capasbase');
            $capasbase = $tablaCapasBase->find('all');
            $countcapasbase = $capasbase->count();

            $tablaLayers = $this->loadModel('Layers');
            $layers = $tablaLayers->find()->select(['idlayer', 'nombre', 'urlservice', 'styles', 'format', 'transparent', 'version', 'crs', 'uppercase', 'minzoom',
                'maxzoom', 'opacity', 'attribution', 'layers']);


            //Recorro los nombres de las capas base y creo un arreglo

            $res = [
                'dataconfig' => $mapConfigData,
                'capasbase' => $capasbase,
                'layersoverlay' => $layers,
                'countcapasbase' => $countcapasbase
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


    public function getAttribute()
    {
        $this->layout = null;
        $this->autoRender = false;



        if ($this->request->is('ajax')) {

            $url = $this->request->getQuery('url');

            $res = [
                'dataconfig' => [
                    'nombre' => $this->request->getQuery('url')
                ]
            ];

            $contenido = file_get_contents($url);


            return $this->json($contenido);
        }



    }

}
