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
        $this->Auth->allow(['add', 'logout', 'edit','profile','delete']);
    }

    public function index()
    {
        $this->setAction('profile');
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {   
        $this->loadModel('Buildings');
        $buildings = $this->Buildings->find('all');
        $this->set(compact('buildings'));
        
        $datos = $this->request->data;
        if(count($datos) > 0)
        {
            if($datos['tipoSubmit'] == 'Edificio')
            {
                $this->set('formData',$datos);
                $this->loadModel('Apartments');

                $apartments = $this->Apartments->find('all')-> where(['Apartments.building_id =' => $datos['edificio'], 'Apartments.owner_id IS' => null]);
                if($apartments->isEmpty()){
                    $this->set('sinDptos','');
                }else{
                    $this->set(compact('apartments'));
                }
            }
            elseif ($datos['tipoSubmit'] == 'Datos'){
                if($datos['tipoUser']==1){      // Propietario 
                    /* crear usuario */
                    $this->loadModel('Owners');
                    $this->loadModel('Apartments');

                    // $user sera una entidad si se pudo crear un nuevo usuario en la BD, y será null si hubo error
                    $user = $this->Owners->newUser($datos['rut'],$datos['name'],$datos['surname']);

                    if($user){
                        $depto = $this->Apartments->get($datos['departamento']);

                        if($depto){
                            $depto->owner_id = $user->id;

                            if($this->Apartments->save($depto)){
                                $this->Flash->set('Usuario registrado y depto actualizado');
                            }else{
                                $this->Flash->set('Usuario registrado y depto sin actualizar');
                            }

                        }else{
                            $this->Flash->set('Usuario registrado y depto sin encontrar');
                        }
                    }else{
                        $this->Flash->set('Usuario no se pudo registrar');
                    }

                }elseif($datos['tipoUser']==2){ // Ejecutor
                    /* crear usuario */
                    $this->loadModel('Executors');

                    // $user sera una entidad si se pudo crear un nuevo usuario en la BD, y será null si hubo error
                    $user = $this->Executors->newUser($datos['rut'],$datos['name'],$datos['surname']);

                    if($user){
                        $this->Flash->set('Usuario registrado');
                    }else{
                        $this->Flash->set('Usuario no se pudo registrar');
                    }

                }elseif($datos['tipoUser']==3){ // Supervisor
                    /* crear usuario */
                    $this->loadModel('Supervisors');
                    $this->loadModel('Buildings');

                    // $user sera una entidad si se pudo crear un nuevo usuario en la BD, y será null si hubo error
                    $user = $this->Supervisors->newUser($datos['rut'],$datos['name'],$datos['surname']);

                    if($user){
                        $edificio = $this->Buildings->get($datos['edificio']);

                        if($edificio){
                            $edificio->supervisor_id = $user->id;

                            if($this->Buildings->save($edificio)){
                                $this->Flash->set('Usuario registrado y edificio actualizado');
                            }else{
                                $this->Flash->set('Usuario registrado y edificio sin actualizar');
                            }

                        }else{
                            $this->Flash->set('Usuario registrado y edificio sin encontrar');
                        }
                    }else{
                        $this->Flash->set('Usuario no se pudo registrar');
                    }

                }elseif($datos['tipoUser']==4){ // Administrador
                    /* crear usuario */
                    $this->loadModel('Administrators');

                    // $user sera una entidad si se pudo crear un nuevo usuario en la BD, y será null si hubo error
                    $user = $this->Administrators->newUser($datos['rut'],$datos['name'],$datos['surname']);

                    if($user){
                        $this->Flash->set('Usuario registrado');
                    }else{
                        $this->Flash->set('Usuario no se pudo registrar');
                    }
                }else{
                    $this->set('formData',$datos);
                    return;
                }
            }
        }
        
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
                    ['conditions' => ['Administrators.id =' => $id]]);
            $tipo = 4;
            $this->set(compact('tipo'));
            $this->set(compact('user'));
        }
        elseif($tabla == 'owners')
        {
            $user = $this->Owners->find('all',
                    ['conditions' => ['Owners.id =' => $id]]);
            $tipo = 1;
            $this->set(compact('tipo'));
            $this->set(compact('user'));
        }
        elseif($tabla == 'executors')
        {
            $user = $this->Executors->find('all',
                    ['conditions' => ['Executors.id =' => $id]]);
            $tipo = 2;
            $this->set(compact('tipo'));
            $this->set(compact('user'));
        }
        elseif($tabla == 'supervisors')
        {
            $user = $this->Supervisors->find('all',
                    ['conditions' => ['Supervisors.id =' => $id]]);
            $tipo = 3;
            $this->set(compact('tipo'));
	    $this->set(compact('user'));
        }
    }

    public function delete($tabla,$id){
         $this->loadModel('Administrators');
        $this->loadModel('Owners');
        $this->loadModel('Executors');
        $this->loadModel('Supervisors');

        if($tabla == 'administrators')
        {
            $user = $this->Administrators->get($id);
            $result = $this->Administrators->delete($user);
            debug($result);
        }
        elseif($tabla == 'owners')
        {
            $user = $this->Owners->get($id);
            $result = $this->Owners->delete($user);
            debug($result);
        }
        elseif($tabla == 'executors')
        {
            $user = $this->Executors->get($id);
            $result = $this->Executors->delete($user);
            debug($result);
        }
        elseif($tabla == 'supervisors')
        {
            $user = $this->Supervisors->get($id);
            $result = $this->Supervisors->delete($user);
            debug($result);
        }


        $this->Flash->set('Usuario eliminado');
        return $this->redirect(['controller' => 'Administrators', 'action' => 'index']);
    }

    public function profile(){
        $session = $this->request->session();
        if (!$session->check('User')){
            $this->setAction('login');
        }

        if ($this->request->is('post')) {
            
        }else{
            $user = $session->read('User');
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
                    $session->write('User',$user);
                    $session->write('User.tipo','propietario');

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
                    $session->write('User',$user);
                    $session->write('User.tipo','ejecutor');
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
                    $session->write('User',$user);
                    $session->write('User.tipo','supervisor');

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
                    $session->write('User',$user);
                    $session->write('User.tipo','admin');
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