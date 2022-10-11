const URLROOT = "http://localhost/curso_php/Bibliosoft/"
let frmCliente = document.getElementById("frmCliente");
function init() {
    frmCliente.addEventListener("submit", function (e) {
      guardar(e);
    });
  }

  function guardar(e) {
    e.preventDefault();
    let datos = new FormData(frmCliente);
  
    fetch(URLROOT+"Cliente/addClient", {
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
      alertCliente(ok);
    })
    .catch(function (err) {
      alertErrorCliente(err);
    });
  }
  
  function alertCliente(data) {
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
  
  function alertErrorCliente(e) {
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