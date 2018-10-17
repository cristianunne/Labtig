<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Escalascapas Controller
 *
 * @property \App\Model\Table\EscalascapasTable $Escalascapas
 */
class EscalascapasController extends AppController
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

        $escalascapas = $this->Escalascapas->find('all', []);

        $this->set(compact('escalascapas'));
        $this->set('_serialize', ['escalascapas']);

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

        $escalascapas = $this->Escalascapas->newEntity();

        if ($this->request->is('post')) {

            $escalascapas = $this->Escalascapas->patchEntity($escalascapas, $this->request->data);

            if($this->Escalascapas->save($escalascapas)){

                $this->Flash->success(__('La Escala ha sido guardado!.'));
                //Cambiar el Redireccionamiento
                return $this->redirect(['action' => 'index', '?' => ['Accion' => 'Ver Escalas de Capas', 'Categoria' => 'Escalas']]);
            }

            $this->Flash->error(__('Verifique los datos e intente nuevamente'));
        }

        $this->set(compact('escalascapas'));
        $this->set('_serialize', ['escalascapas']);
    }

    public function edit()
    {
        $data_url = $this->request->query;

        $action = $data_url['Accion'];
        $categoria = $data_url['Categoria'];
        $id = $data_url['id'];
        $this->set('action', $action);
        $this->set('categoria', $categoria);

        $escalascapas = $this->Escalascapas->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $escalascapas = $this->Escalascapas->patchEntity($escalascapas, $this->request->data);

            if($this->Escalascapas->save($escalascapas)){

                $this->Flash->success(__('La Categoría ha sido editada!.'));
                //Cambiar el Redireccionamiento
                return $this->redirect(['action' => 'index', '?' => ['Accion' => 'Ver Escalas de Capas', 'Categoria' => 'Escalas']]);
            }

            $this->Flash->error(__('Verifique los datos e intente nuevamente'));

        }
        $this->set(compact('escalascapas'));
        $this->set('_serialize', ['escalascapas']);
    }

}
