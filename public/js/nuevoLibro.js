const URLROOT = "http://localhost/curso_php/Bibliosoft/";
let frmLibro = document.getElementById("frmLibro");
function init() {
  frmLibro.addEventListener("submit", function (e) {
    guardar(e);
  });
}

//Guardar el usuario
function guardar(e) {
  e.preventDefault();
  let datos = new FormData(frmLibro);

  fetch(URLROOT+"Libro/addBook", {
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
    alertLibro(ok);
  })
  .catch(function (err) {
    alertErrorLibro(err);
  });
}

function alertLibro(data) {
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
  
  function alertErrorLibro(e) {
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