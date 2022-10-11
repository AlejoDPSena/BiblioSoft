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
                                                    <h4 class="card-title">Prestamo</h4>
                                                    <form class="form-sample" action="<?php echo URLROOT; ?>Prestamo/guardar" id="frmPrestamo" method="post">
                                                        <p class="card-description">
                                                            Personal info
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Fecha</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="datetime-local" name="fechaFin" class="form-control" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Id. cliente</label>
                                                                    <div class="col-sm-9">
                                                                        <input readonly type="text" name="idCliente" class="form-control" aria-label="Recipient's username" value="<?php echo $data->idCliente; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Nombre Cliente</label>
                                                                    <div class="col-sm-8">
                                                                        <input readonly type="text" name="nombreCliente" class="form-control" aria-label="Recipient's username" value="<?php echo $data->nombreCliente; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="row mb-1 mt-1">
                                                            <div class="col-4"></div>
                                                            <div class="col-4">
                                                                <button type="button" class="btn btn-primary btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#items">
                                                                    <i class="bi bi-plus-circle"> Consultar libros</i>
                                                                </button>
                                                            </div>
                                                        </div> -->
                                                        <div class="row">
                                                            <button type="button" class="btn btn-primary  btn-sm ms-1" id="modalLibrosAbrir" data-bs-toggle="modal" data-bs-target="#libros"><i class="bi bi-plus-circle"> Consultar libros</i></button>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">

                                                                <table class="table table-bordered table-sm" id="detalle">
                                                                    <thead class=" table-light">
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Nombre</th>
                                                                            <th>Categoria</th>
                                                                            <th>Autor</th>
                                                                            <th>Disponibles</th>
                                                                            <th>Cantidad</th>
                                                                            <th>Detalles</th>
                                                                            <th>Publicación</th>
                                                                            <th>Editorial</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        </div>
                                                        <div class="m-1">
                                                            <button type="submit" class="btn btn-success  btn-sm ms-1">Enviar</button>
                                                            <a href="<?php echo URLROOT; ?>Cliente" class="btn btn-success  btn-sm ms-1">Cancelar</a>
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
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

    <!-- Modal Libro-->
    <div class="modal fade" id="libros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Libros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table class="table table-bordered table-sm table-hover" id="tblLibros">
                        <thead class="table-light">
                            <tr>
                                <th>Agregar</th>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Autor</th>
                                <th>Cantidad</th>
                                <th>Detalles</th>
                                <th>Publicación</th>
                                <th>Editorial</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

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
    <script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>
    <script src="<?php echo URLROOT; ?>js/prestamo.js"></script>

    <?php require_once APPROOT . '/views/inc/footer.php'; ?>