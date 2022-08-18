<?php require_once APPROOT . '/views/inc/header.php'; ?>



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
                                                    <h4 class="card-title">Registro de Clientes</h4>
                                                    <form class="form-sample" action="<?php echo URLROOT; ?>Cliente/update/<?php echo $data['idCliente']; ?>" method="post">
                                                        <p class="card-description">
                                                            Personal info
                                                        </p>
                                                        <div class="row">
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Nombre Completo</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="nombreCliente" class="form-control" value="<?php echo $data['nombreCliente']; ?>"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Apellido Completo</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="apellidoCliente" class="form-control" value="<?php echo $data['apellidoCliente']; ?>"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Telefono</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="telefonoCliente" class="form-control" value="<?php echo $data['telefonoCliente']; ?>"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-success  btn-sm ms-1">Enviar</button>
                                                    </form>
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