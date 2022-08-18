<?php require_once APPROOT . '/views/inc/header.php'; ?>

<!--jesuss-->

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Pending Requests</h4>
                                                            <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                                        </div>
                                                        <div>
                                                            <a href="<?php echo URLROOT; ?>Usuario/formAdd" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Añadir Usuario</a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check form-check-flat mt-0">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" disabled class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                                                        </div>
                                                                    </th>
                                                                    <th>Id</th>
                                                                    <th>Usuario</th>
                                                                    <th>Teléfono</th>
                                                                    <th>Email</th>
                                                                    <th>Rol</th>
                                                                    <th>Editar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($data as $usuario) :; ?>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div>
                                                                                    <h6><?php echo $usuario->idUsuario; ?></h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div>
                                                                                    <h6><?php echo $usuario->nombre1Usuario . ' ' . $usuario->nombre2Usuario . ' ' . $usuario->apellido1Usuario . ' ' . $usuario->apellido2Usuario; ?></h6>
                                                                                    <p><?php echo $usuario->usuarioUsuario; ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?php echo $usuario->telefonoUsuario; ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?php echo $usuario->emailUsuario; ?></h6>
                                                                        </td>
                                                                        <td><a href="<?php echo URLROOT; ?>Usuario/update/<?php echo $cliente->idCliente;  ?>">
                                                                                <div class="badge badge-opacity-info"><?php echo $usuario->nombreRol; ?></div>
                                                                            </a></td>
                                                                        <td><a href="<?php echo URLROOT; ?>Usuario/update/<?php echo $usuario->idUsuario;  ?>">
                                                                                <div class="badge badge-opacity-primary">Editar</div>
                                                                            </a></td>
                                                                    </tr>
                                                                <?php endforeach ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once APPROOT . '/views/inc/footer.php'; ?>