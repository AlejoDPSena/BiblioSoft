<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/login.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo URLROOT; ?>public/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" id="Fondo">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 rounded" id="CardLogin">
              <div class="brand-logo">
                <p class="fs-4">Biblio<a href="<?php echo URLROOT; ?>" class="text-decoration-none text-primary fw-semibold">Soft</a></p>
              </div>
              <h3 class="text-center fw-bold">Registro</h3>
              <form class="pt-2">
                <div class="form-group">
                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control form-control-lg" id="usuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre completo:</label>
                  <input type="text" class="form-control form-control-lg" id="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="telefono">Telefono:</label>
                  <input type="text" class="form-control form-control-lg" id="telefono" placeholder="Telefono">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control form-control-lg" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="contraseña">Contraseña:</label>
                  <input type="password" class="form-control form-control-lg" id="contraseña" placeholder="Contraseña">
                </div>
                <div class="form-group text-white">
                  <label for="rol" class="text-black">Rol:</label><br>
                  <!-- Default dropend button -->
                  <select name="" class="btn btn-primary text-center" id="">
                    <option value="">Super Usuario</option>
                    <option value="">Bibliotecario</option>
                    <option value="">Admin</option>
                    <option value="">Usuario</option>
                  </select>
                </div>
                <div class="col-md-12 pt-3 text-center">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="box-shadow: -2px 2px 1px 1px rgba(0,0,0,0.5);" type="submit">CREAR</button>
                  <a class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn" style="box-shadow: 2px 2px 1px 1px rgba(0,0,0,0.3);" href="<?php echo URLROOT; ?>">CANCELAR</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo URLROOT; ?>public/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo URLROOT; ?>public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo URLROOT; ?>public/js/off-canvas.js"></script>
  <script src="<?php echo URLROOT; ?>public/js/hoverable-collapse.js"></script>
  <script src="<?php echo URLROOT; ?>public/js/template.js"></script>
  <script src="<?php echo URLROOT; ?>public/js/settings.js"></script>
  <script src="<?php echo URLROOT; ?>public/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>