<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Layers Controller
 *
 * @property \App\Model\Table\LayersTable $Layers
 *
 * @method \App\Model\Entity\Layer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LayersController extends AppController
{

    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'admin')
        {
            if(in_array($this->request->action, ['index', 'add', 'edit']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    public function index()
    {
        //Recupero los datos de la URL
        $data_url = $this->request->query;
        //Obtengo los datos de la tabla
        $action = $data_url['Accion'];
        $categoria = $data_url['Categoria'];

        $layers = $this->paginate($this->Layers->find('all')->contain(['Escalascapas']));

        $this->set(compact('layers'));
        $this->set('action', $action);
        $this->set('categoria', $categoria);

    }

    public function add()
    {
        //Recupero los datos de la URL
        $data_url = $this->request->query;
        //Obtengo los datos de la tabla
        $action = $data_url['Accion'];
        $categoria = $data_url['Categoria'];
        $this->set('action', $action);
        $this->set('categoria', $categoria);

        $layers = $this->Layers->newEntity();
        if ($this->request->is('post')) {
            $layers = $this->Layers->patchEntity($layers, $this->request->data);
            if ($this->Layers->save($layers)) {
                $this->Flash->success(__('La Capa se ha guardado correctamente!'));

                return $this->redirect(['action' => 'index', '?' => ['Accion' => 'Ver Layers', 'Categoria' => 'Layers']]);
            }
            $this->Flash->error(__('Error al guardar la Capa. Intente nuevamente.'));
        }

        $tablaEscalas = $this->loadModel('Escalascapas');
        $escalas = $tablaEscalas->find('list', [
            'keyField' => 'idescala',
            'valueField' => 'categoria'
        ])->toArray();

        $tablaCategoriasCapas = $this->loadModel('Categoriascapas');
        $categoriasCapas = $tablaCategoriasCapas->find('list', [
            'keyField' => 'idcategoriacapa',
            'valueField' => 'categoria'
        ])->toArray();

        $this->set(compact('escalas'));
        $this->set(compact('categoriasCapas'));
        $this->set(compact('layers'));
        $this->set('_serialize', ['layers']);

    }

    public function edit()
    {
        //Recupero los datos de la URL
        $data_url = $this->request->query;
        //Obtengo los datos de la tabla
        $action = $data_url['Accion'];
        $categoria = $data_url['Categoria'];
        $id = $data_url['id'];
        $this->set('action', $action);
        $this->set('categoria', $categoria);


        $layers = $this->Layers->get($id, [
            'contain' => []
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {
            $layers = $this->Layers->patchEntity($layers, $this->request->data);
            if ($this->Layers->save($layers)) {
                $this->Flash->success(__('La Capa se ha guardado correctamente!'));

                return $this->redirect(['action' => 'index', '?' => ['Accion' => 'Ver Layers', 'Categoria' => 'Layers']]);
            }
            $this->Flash->error(__('Error al guardar la Capa. Intente nuevamente.'));
        }

        $tablaEscalas = $this->loadModel('Escalascapas');
        $escalas = $tablaEscalas->find('list', [
            'keyField' => 'idescala',
            'valueField' => 'categoria'
        ])->toArray();

        $tablaCategoriasCapas = $this->loadModel('Categoriascapas');
        $categoriasCapas = $tablaCategoriasCapas->find('list', [
            'keyField' => 'idcategoriacapa',
            'valueField' => 'categoria'
        ])->toArray();

        $this->set(compact('escalas'));
        $this->set(compact('categoriasCapas'));
        $this->set(compact('layers'));
        $this->set('_serialize', ['layers']);

    }


    /*
   * Metodo consultado por la post para obtener los datos iniciales del configuracion
   */
    public function getLayers()
    {
        $this->layout = null;
        $this->autoRender = false;

        if ($this->request->is('ajax')) {

            //Ingreso a la base de datos y traigo los parametro de configuracion

            $layers = $this->Layers->find('all');

            $res = [
                'layers' => $layers
            ];

            return $this->json($res);

        }

    }


}
