<?php

class GruposController extends AppController {
	var $name = 'Grupos';

	//var $scaffold;
	public $components = array('Session');
    public $helpers = array('Html','Form');

    public function index() {
        $this->Grupo->recursive = 1;
        $Grupos = $this->Grupo->find('all');
        $this->set('grupos', $Grupos);
    }
    public function add() {
        if ($this->request->is('post')) {
            if ($this->Grupo->save($this->request->data)) {
                $this->Session->setFlash('Grupo guardado.', 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function view($id = null) {
        $this->Grupo->id = $id;
        $this->set('grupo', $this->Grupo->read());
	}

    public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Grupo no Valido'));
	    }

	    $grupo = $this->Grupo->findById($id);
	    if (!$grupo) {
	        throw new NotFoundException(__('Grupo no Valido'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Grupo->id = $id;
	        if ($this->Grupo->save($this->request->data)) {
	            $this->Session->setFlash(__('Nombre Actualizado.', 'default', array('class' => 'alert alert-success')));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('No se puede Actualizar.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $grupo;
	    }
	}

	function delete($id) {
	    if (!$this->request->is('post')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Grupo->delete($id)) {
	        $this->Session->setFlash('Grupo ' . $id . ' borrado.', 'default', array('class' => 'alert alert-success'));
	        $this->redirect(array('action' => 'index'));
	    }
	}
	
}