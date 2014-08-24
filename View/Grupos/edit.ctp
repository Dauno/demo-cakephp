<h1>Editar Grupo</h1>
<?php
    echo $this->Form->create('Grupo', array('action' => 'edit'));
    echo $this->Form->input('nombre', array('type' => 'text', 'class' => 'form-control'));
    
    echo $this->Form->input('id', array('type' => 'hidden'));

    $options = array('label' => 'Actializar', 'class' => 'btn btn-success');

	echo $this->Form->end($options);
    