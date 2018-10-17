<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categoriascapas Controller
 *
 * @property \App\Model\Table\CategoriascapasTable $Categoriascapas
 */
class CategoriascapasController extends AppController
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

        $categoriascapas = $this->Categoriascapas->find('all', []);

        $this->set(compact('categoriascapas'));
        $this->set('_serialize', ['categoriascapas']);

        $this->set('action', $action);
        $this->set('categoria', $categoria);

    }

    public function add()
    {
        $data_url = $this->request->query;

        $action = $data_url['Accion'];
        $categoria = $data_url['Categoria'];

        $this->set('action', $action);
        $this->set('categoria', $categoria);

        $categoriascapas = $this->Categoriascapas->newEntity();

        if ($this->request->is('post')) {

            $categoriascapas = $this->Categoriascapas->patchEntity($categoriascapas, $this->request->data);

            if($this->Categoriascapas->save($categoriascapas)){

                $this->Flash->success(__('La Categoría ha sido guardado!.'));
                //Cambiar el Redireccionamiento
                return $this->redirect(['action' => 'index', '?' => ['Accion' => 'Ver Categorìas Temàticas de Capas', 'Categoria' => 'CatCapas']]);
            }

            $this->Flash->error(__('Verifique los datos e intente nuevamente'));
        }

        $this->set(compact('categoriascapas'));
        $this->set('_serialize', ['categoriascapas']);
    }


    public function edit()
    {
        $data_url = $this->request->query;

        $action = $data_url['Accion'];
        $categoria = $data_url['Categoria'];
        $id = $data_url['id'];
        $this->set('action', $action);
        $this->set('categoria', $categoria);

        $categoriascapas = $this->Categoriascapas->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $categoriascapas = $this->Categoriascapas->patchEntity($categoriascapas, $this->request->data);

            if($this->Categoriascapas->save($categoriascapas)){

                $this->Flash->success(__('La Categoría ha sido editada!.'));
                //Cambiar el Redireccionamiento
                return $this->redirect(['action' => 'index', '?' => ['Accion' => 'Ver Categorìas Temàticas de Capas', 'Categoria' => 'CatCapas']]);
            }

            $this->Flash->error(__('Verifique los datos e intente nuevamente'));

        }
        $this->set(compact('categoriascapas'));
        $this->set('_serialize', ['categoriascapas']);
    }




}
