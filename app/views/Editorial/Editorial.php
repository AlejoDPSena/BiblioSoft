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
                                                            <h4 class="card-title card-title-dash mb-3">Editoriales</h4>
                                                            <a class="btn btn-success btn-sm" href="<?php echo URLROOT; ?>Editorial/ImprimirListado"><i class="bi bi-printer"></i></a></small>
                                                        </div>
                                                        <div>
                                                            <a href="<?php echo URLROOT; ?>Editorial/formAddEditorial" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Añadir Editorial</a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table" id="tblEditorial">
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Nombre</th>
                                                                    <th>Telefono</th>
                                                                    <th>Ubicación</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

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
    

        <!-- plugins:js -->
    <script src="<?php echo URLROOT ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo URLROOT ?>vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo URLROOT ?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo URLROOT ?>vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo URLROOT ?>js/off-canvas.js"></script>
    <script src="<?php echo URLROOT ?>js/hoverable-collapse.js"></script>
    <script src="<?php echo URLROOT ?>js/template.js"></script>
    <script src="<?php echo URLROOT ?>js/settings.js"></script>
    <script src="<?php echo URLROOT ?>js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- <script src="js/jquery.cookie.js" type="text/javascript"></script> -->
    <script src="<?php echo URLROOT ?>js/dashboard.js"></script>
    <script src="<?php echo URLROOT ?>js/Chart.roundedBarCharts.js"></script>
    <!-- script bootstrap5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- End custom js for this page-->

    <!-- Data tables -->
    <script src="<?php echo URLROOT ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="<?php echo URLROOT ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- js de la vista -->
    <script src="<?php echo URLROOT ?>js/editorial.js"></script>
    
    <?php require_once APPROOT . '/views/inc/footer.php'; ?>

    <!-- <a href="<?php echo URLROOT; ?>Editorial/formUpdateEditorial/<?php echo $editorial->idEditorial; ?>">
        <div class="badge badge-opacity-primary">Editar</div>
    </a> -->
    <!-- <a href="<?php echo URLROOT; ?>Editorial/deleteEditorial/<?php echo $editorial->idEditorial; ?>">
        <div class="badge badge-opacity-danger">Eliminar</div>
    </a> -->