<?php 
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo URLROOT;?>public/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo URLROOT;?>public/css/login.css">
  <link rel="stylesheet" href="<?php echo URLROOT;?>public/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT;?>public/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo URLROOT;?>public/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?php echo URLROOT;?>public/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo URLROOT;?>public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo URLROOT;?>public/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo URLROOT;?>public/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" id="Fondo">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 rounded" id="CardLogin">
              <div class="brand-logo">
              <p class="fs-4">Biblio<a href="<?php echo URLROOT;?>" class="text-decoration-none text-primary fw-semibold">Soft</a></p>
              </div>
              <h4>Hola! Bienvenido a la mejor biblioteca del mundo.</h4>
              <h6 class="fw-light">Inicia sesión para continuar.</h6>
              <form class="pt-3" action="<?php echo URLROOT;?>login/login" method="POST">
                <div class="form-group">
                  <input type="text" name="usuario" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <input type="password" name="passwordUser" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <div class="form-group">
                  <h5><?php echo $_SESSION['mensaje'];?></h5>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="box-shadow: 2px 2px 1px 1px rgba(0,0,0,0.3);">INICIAR SESIÓN</button>
                </div>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                  <a href="#" class="auth-link text-black">¿Has olvidado la contraseña?</a>
                </div>
                <div class="text-center mt-4 fw-light">
                  ¿Aún no tienes cuenta? <a href="<?php echo URLROOT;?>Registro" class="text-primary">Crear</a>
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
  <script src="<?php echo URLROOT;?>public/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo URLROOT;?>public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo URLROOT;?>public/js/off-canvas.js"></script>
  <script src="<?php echo URLROOT;?>public/js/hoverable-collapse.js"></script>
  <script src="<?php echo URLROOT;?>public/js/template.js"></script>
  <script src="<?php echo URLROOT;?>public/js/settings.js"></script>
  <script src="<?php echo URLROOT;?>public/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
