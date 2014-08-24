<h1>Detalles</h1>

<p><strong>ID: </strong><?php echo $grupo['Grupo']['id']; ?></p>
<p><strong>Nombre: </strong><?php echo $grupo['Grupo']['nombre']; ?></p>
<?php echo $this->Html->link("Editar",
            array('controller' => 'grupos', 'action' => 'edit', $grupo['Grupo']['id']),
            array('class' => 'btn btn-x btn-info')); ?>

<?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'delete', $grupo['Grupo']['id']),array('class' => 'btn btn-x btn-danger'),'Estas seguro?');
            ?>
            
<?php echo $this->Html->link("Volver",
            array('controller' => 'grupos', 'action' => 'index'),
            array('class' => 'btn btn-x btn-primary')); ?>