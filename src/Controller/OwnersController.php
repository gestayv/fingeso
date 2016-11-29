<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Owners Controller
 *
 * @property \App\Model\Table\OwnersTable $Owners
 */
class OwnersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->set($this->Owners->Complaints->find('all'));
    }

    /**
     * View method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $owner = $this->Owners->get($id, [
            'contain' => ['Apartments', 'Complaints']
        ]);

        $this->set('owner', $owner);
        $this->set('_serialize', ['owner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $owner = $this->Owners->newEntity();
        if ($this->request->is('post')) {
            $owner = $this->Owners->patchEntity($owner, $this->request->data);
            if ($this->Owners->save($owner)) {
                $this->Flash->success(__('The owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The owner could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('owner'));
        $this->set('_serialize', ['owner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $owner = $this->Owners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $owner = $this->Owners->patchEntity($owner, $this->request->data);
            if ($this->Owners->save($owner)) {
                $this->Flash->success(__('The owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The owner could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('owner'));
        $this->set('_serialize', ['owner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $owner = $this->Owners->get($id);
        if ($this->Owners->delete($owner)) {
            $this->Flash->success(__('The owner has been deleted.'));
        } else {
            $this->Flash->error(__('The owner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
