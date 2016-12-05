<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;

class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout', 'edit']);
    }

    public function index()
    {
    }

    public function view($id)
    {
    }

    public function add()
    {
        /*
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
        */
    }

    public function edit(/*string*/$tabla, /*int*/$id)
    {
        $this->loadModel('Administrators');
        $this->loadModel('Owners');
        $this->loadModel('Executors');
        $this->loadModel('Supervisors');
        if($tabla == 'administrators')
        {
            $user = $this->Administrators->find('all',
                    ['conditions' => ['Administrators.id' => $id]]);
             $this->set(compact('user'));
        }
        elseif($tabla == 'owners')
        {
            $user = $this->Owners->find('all',
                    ['conditions' => ['Owners.id' => $id]]);
             $this->set(compact('user'));
        }
        elseif($tabla == 'executors')
        {
            $user = $this->Executors->find('all',
                    ['conditions' => ['Executors.id' => $id]]);
            $this->set(compact('user'));
        }
        elseif($tabla == 'supervisors')
        {
            $user = $this->Supervisors->find('all',
                    ['conditions' => ['Supervisors.id' => $id]]);
            $this->set(compact('user'));
        }
    }

    public function login()
    {
        $session = $this->request->session();
        $session->destroy();
        if ($this->request->is('post')) {
            $formData = $this->request->data;

            if($formData['tipoUser'] == '1'){
                $admins = TableRegistry::get('Owners');
            
                $query = $admins->find()
                    ->where([
                        'username'=>$formData['username'],
                        'password'=>$formData['password']
                    ])
                    ->first();

                if ($query){
                    $user = $query->toArray();
                    $session->write('User.tipo','propietario');
                    $session->write('User',$user);

                    return $this->redirect(['controller' => 'Owners', 'action' => 'index']);
                }else{
                    $this->Flash->set('Nombre de usuario o contraseña incorrecta');
                }



            }elseif($formData['tipoUser'] == '2'){
                $admins = TableRegistry::get('executors');
            
                $query = $admins->find()
                    ->where([
                        'username'=>$formData['username'],
                        'password'=>$formData['password']
                    ])
                    ->first();

                if ($query){
                    $user = $query->toArray();
                    $session->write('User.tipo','ejecutor');
                    $session->write('User',$user);

                    return $this->redirect(['controller' => 'Executors', 'action' => 'index']);

                }else{
                    $this->Flash->set('Nombre de usuario o contraseña incorrecta');
                }



            }elseif($formData['tipoUser'] == '3'){
                $admins = TableRegistry::get('Supervisors');
            
                $query = $admins->find()
                    ->where([
                        'username'=>$formData['username'],
                        'password'=>$formData['password']
                    ])
                    ->first();

                if ($query){
                    $user = $query->toArray();
                    $session->write('User.tipo','supervisor');
                    $session->write('User',$user);

                    return $this->redirect(['controller' => 'Supervisors', 'action' => 'index']);
                }else{
                    $this->Flash->set('Nombre de usuario o contraseña incorrecta');
                }



            }elseif($formData['tipoUser'] == '4'){
                $admins = TableRegistry::get('Administrators');
            
                $query = $admins->find()
                    ->where([
                        'username'=>$formData['username'],
                        'password'=>$formData['password']
                    ])
                    ->first();

                if ($query){
                    $user = $query->toArray();
                    $session->write('User.tipo','admin');
                    $session->write('User',$user);

                    return $this->redirect(['controller' => 'Administrators', 'action' => 'index']);
                }else{
                    $this->Flash->set('Nombre de usuario o contraseña incorrecta');
                }
            }           
        }
    }

    public function logout()
    {
        $this->request->session()->destroy();
        return $this->redirect(['controller' => 'Home', 'action' => 'index']);
    }

}

?>