<h1>Grupos</h1>
<?php echo $this->Html->link("Agregar Grupo",array('controller' => 'grupos', 'action' => 'add'),array('class' => 'btn btn-lg btn-success')); ?>
<p></p>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        <?php foreach ($grupos as $grupo): ?>
        <tr>
            <td><?php echo $grupo['Grupo']['id']; ?></td>
            <td><?php echo $grupo['Grupo']['nombre']; ?></td>
            <td>
            <?php echo $this->Html->link("Ver",
            array('controller' => 'grupos', 'action' => 'view', $grupo['Grupo']['id']),
            array('class' => 'btn btn-x btn-primary')); ?>
            </td>
             <td>
            <?php echo $this->Html->link("Editar",
            array('controller' => 'grupos', 'action' => 'edit', $grupo['Grupo']['id']),
            array('class' => 'btn btn-x btn-info')); ?>
            </td>
            
            <td>
            <?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'delete', $grupo['Grupo']['id']),array('class' => 'btn btn-x btn-danger'),'Estas seguro?');
            ?>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>

    