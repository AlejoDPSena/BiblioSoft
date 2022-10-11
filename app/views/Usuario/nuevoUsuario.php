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
                                                    <h4 class="card-title">Registro de Usuarios</h4>
                                                    <form class="form-sample"  id="frmUsuario" >
                                                        <p class="card-description">
                                                            Personal info
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Primer Nombre</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="nombre1Usuario" id="nombre1Usuario"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Segundo Nombre</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="nombre2Usuario" id="nombre2Usuario"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Primer Apellido</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="apellido1Usuario" id="apellido1Usuario"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Segundo Apellido</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="apellido2Usuario" id="apellido2Usuario"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Rol</label>
                                                                    <div class="col-sm-9">
                                                                        <select name="Rol_idRol" id="disabledSelect" class="form-select">
                                                                            <?php
                                                                            $contador = 1;
                                                                            foreach ($data as $rol) :; ?>
                                                                                <option value="<?php echo $contador; ?>"><?php echo $rol->nombreRol; ?></option>
                                                                            <?php
                                                                                $contador = $contador + 1;
                                                                            endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Telefono</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="telefonoUsuario" id="telefonoUsuario"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="card-description">
                                                            Login
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Email</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="email" class="form-control" name="emailUsuario" id="emailUsuario"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Usuario</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="usuarioUsuario" id="usuarioUsuario"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Password</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="password" class="form-control" name="passwordUsuario" id="passwordUsuario"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <a class="btn btn-primary btn-lg text-white mb-0 me-0" type="submit"><i class="mdi mdi-account-plus"></i>enviar</a> -->
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
    <script src="<?php echo URLROOT; ?>public/css/sweetalert2.min.css"></script>
    <script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>
    <script src="<?php echo URLROOT ?>public/js/nuevoUsuario.js"></script>

    <?php require_once APPROOT . '/views/inc/footer.php'; ?>