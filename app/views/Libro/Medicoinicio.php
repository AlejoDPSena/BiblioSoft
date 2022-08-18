<?php require_once APPROOT."/views/inc/header.php" ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h1>Medico</h1>
        </div>
        <div class="col-6">
            <a href="<?php echo URLROOT ;?>Medico/formAdd" type="button" class="btn btn-success">Agregar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Especialidad</th>
                        <th>Accion</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $medico): ;?>
                    <tr>
                        <td><?php echo $medico->id_medico ;?></td>
                        <td><?php echo $medico->nombre_medico ;?></td>
                        <td><?php echo $medico->apellido_medico ;?></td>
                        <td><?php echo $medico->especialidad ;?></td>
                        <td><button type="button" class="btn btn-primary">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Borrar</button></td>
                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>

<?php require_once APPROOT."/views/inc/footer.php" ?>