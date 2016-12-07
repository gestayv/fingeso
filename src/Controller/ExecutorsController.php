<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Executors Controller
 *
 * @property \App\Model\Table\ExecutorsTable $Executors
 */
class ExecutorsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $session = $this->request->session();
        if($session->read('User_tipo') != 'ejecutor')
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
        $executors = $this->paginate($this->Executors);

        $this->set(compact('executors'));
        $this->set('_serialize', ['executors']);
    }

    /**
     * View method
     *
     * @param string|null $id Executor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $executor = $this->Executors->get($id, [
            'contain' => ['Complaints']
        ]);

        $this->set('executor', $executor);
        $this->set('_serialize', ['executor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $executor = $this->Executors->newEntity();
        if ($this->request->is('post')) {
            $executor = $this->Executors->patchEntity($executor, $this->request->data);
            if ($this->Executors->save($executor)) {
                $this->Flash->success(__('The executor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The executor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('executor'));
        $this->set('_serialize', ['executor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Executor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $executor = $this->Executors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $executor = $this->Executors->patchEntity($executor, $this->request->data);
            if ($this->Executors->save($executor)) {
                $this->Flash->success(__('The executor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The executor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('executor'));
        $this->set('_serialize', ['executor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Executor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $executor = $this->Executors->get($id);
        if ($this->Executors->delete($executor)) {
            $this->Flash->success(__('The executor has been deleted.'));
        } else {
            $this->Flash->error(__('The executor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
