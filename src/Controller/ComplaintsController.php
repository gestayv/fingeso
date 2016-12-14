<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Administrators Controller
 *
 * @property \App\Model\Table\AdministratorsTable $Administrators
 */
class ComplaintsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tablaReclamos  = TableRegistry::get('Complaints');
        $tablaHorarios  = TableRegistry::get('Schedules');
        $tablaSurveys   = TableRegistry::get('Surveys');
        $this->loadModel('Apartments');
        $sesion         = $this->request->session();
        $datos          = $this->request->data;
        $apartamentos   = $this->Apartments->find('all', ['conditions' => ['Apartments.owner_id =' => $sesion->read('User.id')]]);
        foreach($apartamentos as $apartamento){}
        if($this->request->is('post'))
        {
            $reclamo                = $tablaReclamos->newEntity();
            $reclamo->name          = $datos['complaint_name'];
            $reclamo->description   = $datos['descripcion'];
            $reclamo->status        = 0;
            $reclamo->owner_id      = $sesion->read('User.id');
            $reclamo->apartment_id  = $apartamento->id;
            if($tablaReclamos->save($reclamo))
            {
                $survey = $tablaSurveys->newEntity();
                $survey->complaint_id = $reclamo->id;
                $survey->status = 0;
                $tablaSurveys->save($survey);
                $day    = 0;
                $sgte   = 0;
                if(count($datos) > 2)
                {
                    foreach ($datos as $dato => $bloque) {
                        $sgte = 0;
                        switch ($dato) {
                            case 'Lunes':
                                $day = 1;
                                $sgte = 1;
                                break;   
                            case 'Martes':
                                $day = 2;
                                $sgte = 1;
                                break;
                            case 'Miercoles':
                                $day = 3;
                                $sgte = 1;
                                break;
                            case 'Jueves':
                                $day = 4;
                                $sgte = 1;
                                break;
                            case 'Viernes':
                                $day = 5;
                                $sgte = 1;
                                break;
                            case 'Sabado':
                                $day = 6;
                                $sgte = 1;
                                break;
                            case 'Domingo':
                                $day = 7;
                                $sgte = 1;
                                break;
                            case 'complaint_name':
                                $day = 0;
                                $sgte = 1;
                                break;
                            case 'descripcion':
                                $day = 0;
                                $sgte = 1;
                                break;
                        }
                        if($sgte == 0)
                        {
                            $horario                = $tablaHorarios->newEntity();
                            $horario->complaint_id  = $reclamo->id;
                            $horario->day           = $dato[0];
                            $horario->block         = $dato[1];
                            $tablaHorarios->save($horario);
                        }
                    }
                }
                else
                {
                    $this->Flash->error("No se ingresó un bloque");
                }    
            }
        }
    }

}
