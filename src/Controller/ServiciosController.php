<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servicios Controller
 *
 * @property \App\Model\Table\ServiciosTable $Servicios
 */
class ServiciosController extends AppController
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

        $servicios = $this->Servicios->find('all', []);

        $this->set('servicios', $servicios);
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


        $servicio = $this->Servicios->newEntity();
        if ($this->request->is('post')) {
            $servicio = $this->Servicios->patchEntity($servicio, $this->request->data);
            if ($this->Servicios->save($servicio)) {
                $this->Flash->success(__('El servicio se ha guardado correctamente!'));

                return $this->redirect(['action' => 'index', '?' => ['Accion' => 'Ver Servicios', 'Categoria' => 'Servicios']]);
            }
            $this->Flash->error(__('Error al guardar el Servicio. Intente nuevamente.'));
        }


        $this->set('servicio', $servicio);
        $this->set('action', $action);
        $this->set('categoria', $categoria);

    }



}
