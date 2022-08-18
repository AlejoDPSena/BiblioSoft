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
                                                    <div class="container-fluid">
                                                        <h4 class="card-title">Edición de libros</h4>
                                                        <form class="form-sample" method="POST" action="<?php echo URLROOT; ?>Libro/updateBook">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Nombre del Libro</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" name="nombreLibro" value="<?php echo $data["nombreLibro"]; ?>" class="form-control" />
                                                                            <input type="text" name="idLibro" hidden value="<?php echo $data["idLibro"]; ?>" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Nombre De Autor</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" name="nombreAutorLibro" value="<?php echo $data["autorLibro"]; ?>" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Fecha de publicación</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" name="fechaPublicacion" value="<?php echo $data["publicacionLibro"]; ?>" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Cantidad</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" name="cantidadLibro" value="<?php echo $data["cantidadLibro"]; ?>" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Categoria</label>
                                                                        <div class="col-sm-9">
                                                                            <select id="disabledSelect" name="categoriaLibro" class="form-select">
                                                                                <option>Accion</option>
                                                                                <option>Terror</option>
                                                                                <option>Suspenso</option>
                                                                                <option>Comedia</option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Editorial</label>
                                                                        <div class="col-sm-9">
                                                                            <select id="disabledSelect" name="idEditorialLibro" class="form-select">
                                                                                <?php foreach($data['infoEditorial'] as $editoriales): ?>
                                                                                <option value="<?php echo $editoriales->idEditorial; ?>"><?php echo $editoriales->nombreEditorial; ?></option>
                                                                                <?php endforeach ?>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="card-description">
                                                                Detalles
                                                            </p>
                                                            <div class="row justify-content-between">
                                                                <div class="col-md-6">
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="detallesLibro" rows=5" style="height:150px ;"><?php echo $data["detallesLibro"]; ?></textarea>
                                                                </div>
                                                                <div class="col-md-6 d-flex justify-content-end mt-5">
                                                                    <div class="mb-3 mt-5">
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
    </div>


    <?php require_once APPROOT . '/views/inc/footer.php'; ?>