const URLROOT = "http://localhost/curso_php/Bibliosoft/"
let frmEdtitorial = document.getElementById("frmEditorial");
function init() {
    frmEditorial.addEventListener("submit", function (e) {
      guardar(e);
    });
  }

  //Guardar el usuario
function guardar(e) {
    e.preventDefault();
    let datos = new FormData(frmEditorial);
  
    fetch(URLROOT+"Editorial/addEditorial", {
      method: "POST",
      body: datos,
    })
    .then(function (response) {
        if (response.ok) {
          return response.ok
        } else {
          throw "Error en la llamada Ajax";
        }
      })
    .then(function (ok) {
        alertEditorial(ok);
      })
      .catch(function (err) {
        alertErrorEditorial(err);
      });
  }

  function alertEditorial(data) {
    Swal.fire({
      title: "¡Inserción Exitosa!",
      text: data,
      icon: "success",
      confirmButtonText: "ok",
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        location.reload();
      }
    });
  }
  
  function alertErrorEditorial(e) {
    Swal.fire({
      title: "Error!!",
      text: e,
      icon: "error",
      confirmButtonText: "ok",
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        location.reload();
      }
    });
  }
init()