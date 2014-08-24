<h1>Agregar Nuevo Grupo</h1>
<?php
echo $this->Form->create('Grupo');
echo $this->Form->input('nombre', array('type' => 'text', 'class' => 'form-control'));

$options = array('label' => 'Guardar', 'class' => 'btn btn-success');
echo $this->Form->end($options);
