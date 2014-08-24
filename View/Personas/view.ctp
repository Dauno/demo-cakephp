<h1>Detalles</h1>

<p><strong>ID: </strong><?php echo $persona['Persona']['id']; ?></p>
<p><strong>Nombre: </strong><?php echo $persona['Persona']['nombre']; ?></p>
<p><strong>Apellido: </strong><?php echo $persona['Persona']['apellido']; ?></p>
<p><strong>Grupos: </strong>
	<?php foreach ($persona['Grupo'] as $grupo): ?>
       <p>- <?php echo $grupo['nombre']; ?></p>
    <?php endforeach; ?>
</p>
<?php echo $this->Html->link("Editar",
            array('controller' => 'personas', 'action' => 'edit', $persona['Persona']['id']),
            array('class' => 'btn btn-x btn-info')); ?>

<?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'delete', $persona['Persona']['id']),array('class' => 'btn btn-x btn-danger'),
                'Estas seguro?');
            ?>
            
<?php echo $this->Html->link("Volver",
            array('controller' => 'personas', 'action' => 'index'),
            array('class' => 'btn btn-x btn-primary')); ?>