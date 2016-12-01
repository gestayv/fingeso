<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function index()
    {
        $session = $this->request->session();
        if ($session->check('User')) {
            $rol = $session->read('User.tipo');
            if($rol = 'admin'){
                return $this->redirect(['controller' => 'Administrators', 'action' => 'index']);
            }elseif ($rol = 'propietario') {
                return $this->redirect(['controller' => 'Owners', 'action' => 'index']);
            }elseif ($rol = 'ejecutor') {
                return $this->redirect(['controller' => 'Executors', 'action' => 'index']);
            }elseif ($rol = 'supervisor') {
                return $this->redirect(['controller' => 'Supervisors', 'action' => 'index']);
            }else{
                $this->Flash->set('Error al ingresar');
                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
        }else{
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }
}
