<h1>Agregar Nuevo Trabajador</h1>
<?php
echo $this->Form->create('Persona');
echo $this->Form->input('nombre', array('type' => 'text', 'class' => 'form-control'));
echo $this->Form->input('apellido', array('type' => 'text', 'class' => 'form-control'));
echo $this->Form->input('Grupo', array('class' => 'form-control'));

$options = array('label' => 'Guardar', 'class' => 'btn btn-success');
echo $this->Form->end($options);
