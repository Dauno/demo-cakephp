<h1>Editar Trabajador</h1>
<?php
    echo $this->Form->create('Persona', array('action' => 'edit'));
    echo $this->Form->input('nombre', array('type' => 'text', 'class' => 'form-control'));
    echo $this->Form->input('apellido', array('type' => 'text', 'class' => 'form-control'));
	echo $this->Form->input('Grupo', array('class' => 'form-control'));    
    echo $this->Form->input('id', array('type' => 'hidden'));

    $options = array('label' => 'Actializar', 'class' => 'btn btn-success');

	echo $this->Form->end($options);
?>