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
                                                    <h4 class="card-title">Edición de Editoriales</h4>
                                                    <form class="form-sample" method="POST" action="<?php echo URLROOT; ?>Editorial/updateEditorial">
                                                        <p class="card-description">
                                                            Personal info
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Nombre</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="nombreEditorial" value="<?php echo $data->nombreEditorial;?>" class="form-control"/>
                                                                        <input type="text" hidden name="idEditorial" value="<?php echo $data->idEditorial;?>"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Telefono</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="telefonoEditorial" value="<?php echo $data->telefonoEditorial;?>" class="form-control" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Ubicación</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="ubicacionEditorial" value="<?php echo $data->ubicacionEditorial;?>" class="form-control" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 d-flex justify-content-end">
                                                                <div class="mb-3">
                                                                    <button type="submit" class="btn btn-primary btn-lg text-white mb-0 mt-1 me-0"><i class="bi bi-send-fill"></i>Enviar Datos</button>
                                                                </div>
                                                            </div>
                                                        </div>
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