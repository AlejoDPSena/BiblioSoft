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
                                                            <h4 class="card-title card-title-dash">Clientes</h4>
                                                            <form action="<?php echo URLROOT; ?>Cliente/search" method="POST">
                                                                <div class="input-group mb-2 w-100">
                                                                    <input type="text" class="form-control form-control-sm " placeholder="Apellidos ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="valor">
                                                                    <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
                                                                </div>
                                                            </form>
                                                            <a class="btn btn-success btn-sm" href="<?php echo URLROOT; ?>Cliente/ImprimirListado"><i class="bi bi-printer"></i></a></small>
                                                        </div>
                                                        <div>
                                                            <a href="<?php echo URLROOT; ?>Cliente/formAddCliente" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Añadir Cliente</a>
                                                            <a href="<?php echo URLROOT; ?>Cliente/detPenalizacion" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Det. Penalización</a>
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
                                                                    <th>Nombre</th>
                                                                    <th>Telefono</th>
                                                                    <th>Estado</th>
                                                                    <th>Penalización</th>
                                                                    <th>Editar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($data as $index => $fila) :; ?>
                                                                    <?php foreach ($fila as $index2 => $cliente) :; ?>
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
                                                                                        <h6><?php echo $cliente->idCliente; ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h6><?php echo $cliente->nombreCliente . ' ' . $cliente->apellidoCliente; ?></h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6><?php echo $cliente->telefonoCliente; ?></h6>
                                                                            </td>
                                                                            <td>
                                                                                <a href="<?php echo URLROOT; ?>Cliente/updateEstado/<?php echo $cliente->idCliente;  ?>">
                                                                                    <div class="badge badge-opacity-info"><?php echo $cliente->estadoCliente; ?></div>
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="<?php echo URLROOT; ?>Cliente/formPenalizacion">
                                                                                    <div class="badge badge-opacity-warning">Penalizar</div>
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="<?php echo URLROOT; ?>Cliente/update/<?php echo $cliente->idCliente;  ?>">
                                                                                    <div class="badge badge-opacity-primary">Editar</div>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach ?>
                                                                <?php endforeach ?>
                                                            </tbody>
                                                        </table>
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="<?php echo $data["previous"]; ?>">Previo</a></li>
                                                                <?php for ($index = 1; $index <= $data['total']; $index++) : ?>
                                                                    <li class="page-item"><a class="page-link" href=" <?php echo $index; ?>">
                                                                            <?php echo $index; ?>
                                                                        </a></li>
                                                                <?php endfor; ?>
                                                                <li class="page-item"><a class="page-link" href=" <?php echo URLROOT; ?>Cliente/<?php echo $data["next"]; ?>">Siguiente</a></li>
                                                            </ul>
                                                        </nav>
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