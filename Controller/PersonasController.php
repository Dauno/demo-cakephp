<?php

class PersonasController extends AppController {
    var $name = 'Personas';
    public $components = array('Session');
    public $helpers = array('Html','Form');
    //var $scaffold;

    public function index() {
        $this->Persona->recursive = 1;
        $Personas = $this->Persona->find('all');
        $this->set('personas', $Personas);
    }
    public function add() {
        if (!empty($this->data)) {
            $this->Persona->create();
            $this->Persona->save($this->data);
            $this->Session->setFlash('Trabajador guardado.', 'default', array('class' => 'alert alert-success'));
            $this->redirect(array('action' => 'index'),null,true);
        }
        $Grupos = $this->Persona->Grupo->find('list',array('fields' => 'Grupo.nombre' ));
        $this->set('grupos', $Grupos);
        
    }
    public function view($id = null) {
        $this->Persona->id = $id;
        $this->set('persona', $this->Persona->read());
    }
    public function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Persona->delete($id)) {
            $this->Session->setFlash('Trabajador ' . $id . ' borrado.', 'default', array('class' => 'alert alert-success'));
            $this->redirect(array('action' => 'index'));
        }
    }
    public function edit($id = null) {

        if (empty($this->data)) {
            $this->data = $this->Persona->findById($id);
            $Grupos = $this->Persona->Grupo->find('list',array('fields' => 'Grupo.nombre' ));
            $this->set('grupos', $Grupos);
        } else {
            $this->Persona->create();
            if ($this->Persona->save($this->data)) {
              $this->Session->setFlash(__('Datos Actualizados.', 'default', array('class' => 'alert alert-success')));
              $this->redirect(array('action' => 'index'));
            }
        }
    }
     /*   $this->Persona->id = $id;
        if (empty($this->data)) {
           $this->data = $this->Persona->read();
        }
        else {
           if ($this->Persona->save($this->data))
           {
              $this->Session->setFlash(__('Datos Actualizados.', 'default', array('class' => 'alert alert-success')));
              $this->redirect(array('action' => 'index'));
           }
        }
    }
        public $components = array('Session');
    public $helpers = array('Html','Form');

    public function index() {
        $this->set('personas', $this->Persona->find('all'));


        $options['joins'] = array(
            array('table' => 'personas_grupos',
                'alias' => 'PersonasGrupos',
                'type' => 'inner',
                'conditions' => array(
                    'Persona.id = PersonasGrupos.persona_id'
                )
            ),
            array('table' => 'grupos',
                'alias' => 'Grupo',
                'type' => 'inner',
                'conditions' => array(
                    'PersonasGrupos.grupo_id = Grupo.id'
                )
            )
        );

        $this->set('grupos', $this->Persona->find('all',$options));
    }
    public function add() {
        if ($this->request->is('post')) {
            if ($this->Persona->save($this->request->data)) {
                $this->Session->setFlash('Trabajador guardado.', 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function view($id = null) {
        $this->Persona->id = $id;
        $this->set('persona', $this->Persona->read());
    }
    public function viewGrupos() {


    }
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Trabajador no Valido'));
        }

        $persona = $this->Persona->findById($id);
        if (!$persona) {
            throw new NotFoundException(__('Trabajador no Valido'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Persona->id = $id;
            if ($this->Persona->save($this->request->data)) {
                $this->Session->setFlash(__('Datos Actualizados.', 'default', array('class' => 'alert alert-success')));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('No se puede Actualizar.'));
        }

        if (!$this->request->data) {
            $this->request->data = $persona;
        }
    }

    public function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Persona->delete($id)) {
            $this->Session->setFlash('Trabajador ' . $id . ' borrado.', 'default', array('class' => 'alert alert-success'));
            $this->redirect(array('action' => 'index'));
        }
    }*/
    
}