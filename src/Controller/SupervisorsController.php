<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Supervisors Controller
 *
 * @property \App\Model\Table\SupervisorsTable $Supervisors
 */
class SupervisorsController extends AppController
{

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
