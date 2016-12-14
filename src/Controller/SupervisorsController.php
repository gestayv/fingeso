<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Supervisors Controller
 *
 * @property \App\Model\Table\SupervisorsTable $Supervisors
 */
class SupervisorsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $session = $this->request->session();
        if($session->read('User.tipo') != 'supervisor')
        {
            $this->Auth->deny();
            $this->redirect($this->referer());
        }
        else
        {
            $this->Auth->allow();
        }
    }

    public function assign($ticket_id = null)
    {
        if($ticket_id==null) return $this->redirect($this->referer());

        if ($this->request->is('post') && $this->request->data['action']=='asignar') {
            $this->loadModel('Complaints');
            $ticket = $this->Complaints->get($ticket_id);
            if($ticket){
                $ticket->executor_id = intval($this->request->data['exec_id']);
                $this->Complaints->save($ticket);
                $this->Flash->success('Operación realizada con éxito');
                return $this->redirect(['controller' => 'Supervisors', 'action' => 'index']);
            }else{
                $this->Flash->error('No se pudo realizar la operación');
            }
        }

        $this->loadModel('Executors');
        $executors = $this->Executors->find('all');
        $this->set(compact('executors'));
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->loadModel('Complaints');
        $this->loadModel('Owners');
        $this->loadModel('Executors');
        $this->loadModel('Surveys');

        $complaints = $this->Complaints->find('all'
            , ['contain' => ['Owners', 'Executors', 'Surveys']]);
        $this->set(compact('complaints'));        
    }

    /**
     * View method
     *
     * @param string|null $id Supervisor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supervisor = $this->Supervisors->get($id, [
            'contain' => ['Buildings']
        ]);

        $this->set('supervisor', $supervisor);
        $this->set('_serialize', ['supervisor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supervisor = $this->Supervisors->newEntity();
        if ($this->request->is('post')) {
            $supervisor = $this->Supervisors->patchEntity($supervisor, $this->request->data);
            if ($this->Supervisors->save($supervisor)) {
                $this->Flash->success(__('The supervisor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The supervisor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('supervisor'));
        $this->set('_serialize', ['supervisor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Supervisor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supervisor = $this->Supervisors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supervisor = $this->Supervisors->patchEntity($supervisor, $this->request->data);
            if ($this->Supervisors->save($supervisor)) {
                $this->Flash->success(__('The supervisor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The supervisor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('supervisor'));
        $this->set('_serialize', ['supervisor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Supervisor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supervisor = $this->Supervisors->get($id);
        if ($this->Supervisors->delete($supervisor)) {
            $this->Flash->success(__('The supervisor has been deleted.'));
        } else {
            $this->Flash->error(__('The supervisor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
