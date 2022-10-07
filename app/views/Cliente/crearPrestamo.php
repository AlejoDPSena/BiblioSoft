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
                                                    <form class="form-sample" action="<?php echo URLROOT; ?>Cliente/crearPrestamo" method="post">
                                                        <p class="card-description">
                                                            Personal info
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Fecha</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="date" name="nombreCliente" class="form-control" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Id. cliente</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" aria-label="Recipient's username">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Nombre Cliente</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" aria-label="Recipient's username">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <button type="submit" class="btn btn-primary  btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#libros"><i class="bi bi-plus-circle"> Consultar libros</i></button>
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
                                                            <div class="col-12">

                                                                <table class="table table-bordered table-sm" id="detalle">
                                                                    <thead class=" table-light">
                                                                        <tr>
                                                                            <th>Item</th>
                                                                            <th>Libro</th>
                                                                            <th>Categoria</th>
                                                                            <th>Editorial</th>
                                                                            <th>Cantidad</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        </div>
                                                        <div class="m-1">
                                                            <button type="submit" class="btn btn-success  btn-sm ms-1">Enviar</button>
                                                            <button type="submit" class="btn btn-success  btn-sm ms-1">Cancelar</button>
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


    <!-- Modal Libro-->
<div class="modal fade" id="libros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Libros</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm table-hover" id="tblItems">
                    <thead class="table-light">
                        <tr>
                            <th>Agregar</th>
                            <th>Id</th>
                            <th>Descripción del libro</th>


                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Agregar</th>
                            <th>Id</th>
                            <th>Descripción del libro</th>

                        </tr>

                    </tfoot>
                </table>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


    <?php require_once APPROOT . '/views/inc/footer.php'; ?>