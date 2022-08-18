<?php require_once APPROOT . "/views/inc/header.php"  ?>


<!-- titulo seccion -->
<div class="row">

    <div class="col-md-12">
        <br>
        <div class="card">
            <div class="card-header bg-primary bg-gradient text-white">
                <h5>Crear Nuevo Médico</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="<?php echo URLROOT; ?>medico/add" method="post">
                            <label for="nombreMedico" class="form-label">Nombre</label>
                            <input type="text" name="nombreMedico" id="nombreMedico" class="form-control form-control-sm">
                            <label for="apellidosMedico" class="form-label">Apellidos</label>
                            <input type="text" name="apellidosMedico" id="apellidosMedico" class="form-control form-control-sm">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" name="direccionMedico" id="direccionMedico" class="form-control form-control-sm">
                            <label for="nombreMedico" class="form-label">Telefono 1</label>
                            <input type="text" name="especialidadMedico" id="nombreMedico" class="form-control form-control-sm">
                    </div>
                    <div class="col">

                        <label for="email" class="form-label">email</label>
                        <input type="email" name="emailMedico" id="emailMedico" class="form-control form-control-sm">

                        <label for="Especialidad" class="form-label">Especialidad</label>
                        <select class="form-control form-control-sm" name="especialidadMedico" id="especialidadMedico">
                            <option>Medicina General</option>
                            <option>Internista</option>
                            <option>Dermatólogia</option>
                            <option>Ginecologia</option>
                        </select>
                        <label for="Estado" class="form-label">Vinculación con la clinica ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                        <label for="Vacunas" class="form-label"> Seleccione las Vacunas que Tiene: </label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Viruela
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Covid
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Otra
                            </label>
                        </div>
                        Subir Foto:
                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <input type="file" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>


                    </div>

                </div>
                <br>
                <div class="card-footer d-flex justify-content-center">

                    <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                    <button type="submit" class="btn btn-success  btn-sm ms-1">Enviar</button>


                    </form>
                </div>

            </div>
        </div>
    </div>
</div>





<!-- fin del contenedor principal -->
</main>









<?php require_once APPROOT . "/views/inc/footer.php"  ?>;