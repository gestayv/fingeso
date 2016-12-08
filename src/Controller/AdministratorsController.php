<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Administrators Controller
 *
 * @property \App\Model\Table\AdministratorsTable $Administrators
 */
class AdministratorsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $session = $this->request->session();
        if($session->read('User.tipo') != 'admin')
        {
            $this->Auth->deny();
            $this->redirect($this->referer());
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->loadModel('Owners');
        $this->loadModel('Executors');
        $this->loadModel('Supervisors');

        $admins = $this->Administrators->find('all');
        $owners = $this->Owners->find('all');
        $execs  = $this->Executors->find('all');
        $supers = $this->Supervisors->find('all');
        
        $this->set(compact('admins'));
        $this->set(compact('owners'));
        $this->set(compact('execs')); 
        $this->set(compact('supers'));
    }

    /**
     * View method
     *
     * @param string|null $id Administrator id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administrator = $this->Administrators->get($id, [
            'contain' => []
        ]);

        $this->set('administrator', $administrator);
        $this->set('_serialize', ['administrator']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administrator = $this->Administrators->newEntity();
        if ($this->request->is('post')) {
            $administrator = $this->Administrators->patchEntity($administrator, $this->request->data);
            if ($this->Administrators->save($administrator)) {
                $this->Flash->success(__('The administrator has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The administrator could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('administrator'));
        $this->set('_serialize', ['administrator']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Administrator id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administrator = $this->Administrators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administrator = $this->Administrators->patchEntity($administrator, $this->request->data);
            if ($this->Administrators->save($administrator)) {
                $this->Flash->success(__('The administrator has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The administrator could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('administrator'));
        $this->set('_serialize', ['administrator']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Administrator id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administrator = $this->Administrators->get($id);
        if ($this->Administrators->delete($administrator)) {
            $this->Flash->success(__('The administrator has been deleted.'));
        } else {
            $this->Flash->error(__('The administrator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
