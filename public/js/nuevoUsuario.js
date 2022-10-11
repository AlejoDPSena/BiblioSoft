const URLROOT = "http://localhost/curso_php/Bibliosoft/";
let frmUsuario = document.getElementById("frmUsuario");
//Carga Inicial de las interacciones
function init() {
  frmUsuario.addEventListener("submit", function (e) {
    guardar(e);
  });
}

function guardar(e) {
    e.preventDefault();
    let datos = new FormData(frmUsuario);
  
    fetch(URLROOT+"Usuario/addUser", {
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
      alertUsuario(ok);
    })
    .catch(function (err) {
      alertErrorUsuario(err);
      
    });
  }
  
  function alertUsuario(data) {
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
  
  function alertErrorUsuario(e) {
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

  init();