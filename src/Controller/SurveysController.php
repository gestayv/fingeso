<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;

class SurveysController extends AppController
{
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        if(!$this->request->session()->check('User')) {
        	return $this->redirect(['controller'=>'Users','action'=>'login']);
        }

        $this->Auth->allow();
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($id){
    	$this->setAction('view',$id); 
    }


    public function view($id = null)
    {
    	if($id == null) return $this->redirect($this->referer());

    	$this->loadModel('Surveys');
    	$survey = $this->Surveys->find()->where(['Surveys.id'=>$id])->contain(['Complaints'])->first();
    	if($survey){
    		$user = $this->request->session()->read('User');
            if ($user['tipo']=='propietario' && $user['id']!=$survey->complaint->owner_id) 
                return $this->redirect($this->referer());

    		$this->set(compact('survey'));
    		$this->set(compact('user'));

    	}else{
    		$this->Flash->error('No existe encuesta');
    		return $this->redirect($this->referer());
    	}
    }

    public function add($idComplaint)
    {
        $this->loadModel('Complaints');

        $surveys = $this->Surveys->find('all')
            ->where(['Surveys.complaint_id' => $idComplaint])
            ->contain(['Complaints']);

        foreach ($surveys as $s) {
            print_r($s);
            echo "<br><br>";
        }

        $this->set(compact('surveys'));
    }
}

?>