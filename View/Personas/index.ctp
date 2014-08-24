<h1>Trabajadores</h1>
<?php echo $this->Html->link("Agregar Trabajador",array('controller' => 'personas', 'action' => 'add'),array('class' => 'btn btn-lg btn-success')); ?>
<p></p>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Grupos</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        <?php foreach ($personas as $persona): ?>
        <tr>
            <td><?php echo $persona['Persona']['id']; ?></td>
            <td><?php echo $persona['Persona']['nombre']; ?></td>
            <td><?php echo $persona['Persona']['apellido']; ?></td>
            <td>
            <?php foreach ($persona['Grupo'] as $grupo): ?>
                <p> <?php echo $grupo['nombre']; ?> </p> 
            <?php endforeach; ?>
            </td>
            <td>
            <?php echo $this->Html->link("Ver",
            array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id']),
            array('class' => 'btn btn-x btn-primary')); ?>
            </td>
             <td>
            <?php echo $this->Html->link("Editar",
            array('controller' => 'personas', 'action' => 'edit', $persona['Persona']['id']),
            array('class' => 'btn btn-x btn-info')); ?>
            </td>
            
            <td>
            <?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'delete', $persona['Persona']['id']),array('class' => 'btn btn-x btn-danger'),'Estas seguro?');
            ?>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>

    