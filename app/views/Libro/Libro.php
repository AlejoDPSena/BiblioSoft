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
                                                            <h4 class="card-title card-title-dash mb-3">Libros</h4>
                                                            <a class="btn btn-success btn-sm" href="<?php echo URLROOT; ?>Libro/ImprimirListado"><i class="bi bi-printer"></i></a></small>
                                                        </div>
                                                        <div>
                                                            <a href="<?php echo URLROOT; ?>Libro/formAddBook" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Añadir Libro</a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table" id="tblLibro">
                                                            <thead>
                                                                <tr>
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

        <!-- Modal Editar -->
        <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="contenidoEditarModal">
                <div class="modal-footer">
                    <a class="btn btn-primary" href="http://localhost/curso_php/bibliosoft/Libro/formUpdateBook/1">Confirmar</a>
                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEstado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="contenidoEstadoModal">
                <div class="modal-footer">
                    <a class="btn btn-primary" href="http://localhost/curso_php/bibliosoft/Libro/updateEstado/">Confirmar</a>
                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>


<!-- Modal eliminar-->
<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Libro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="preguntaEliminar">

        </div>
        <div class="modal-footer">
          <button type="" class="btn btn-primary" id="confirmarDelete">Confirmar</button>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
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
    <script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

    <!-- js de la vista -->
    <script src="<?php echo URLROOT ?>js/libro.js"></script>


    <?php require_once APPROOT . '/views/inc/footer.php'; ?>

    <!-- <div class="form-check form-check-flat mt-0">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
    </div> -->
    <!-- <a href="<?php echo URLROOT; ?>libro/formUpdateBook/<?php echo $libro->idLibro; ?>">
        <div class="badge badge-opacity-primary">Editar</div>
    </a> -->
    <!-- <a href="<?php echo URLROOT; ?>libro/deleteBook/<?php echo $libro->idLibro; ?>">
        <div class="badge badge-opacity-danger">Eliminar</div>
    </a> -->