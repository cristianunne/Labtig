<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 */
class AdminController extends AppController
{

    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'admin')
        {
            if(in_array($this->request->action, ['index', 'login', 'logout', 'view']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

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
