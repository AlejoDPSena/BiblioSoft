// $(document).ready(function () {
//     $('#tblUsuario').DataTable({
//         ajax: {
//             url: 'http://localhost/curso_php/Bibliosoft/Usuario/datatable',
//             dataSrc: ''
//         },
//         columns: [
//             { data: 'idUsuario' },
//             { data: 'nombre1Usuario' },
//             { data: 'nombre2Usuario' },
//             { data: 'apellido1Usuario' },
//             { data: 'apellido2Usuario' },
//             { data: 'telefonoUsuario' },
//             { data: 'emailUsuario' },
//             { data: 'nombreRol' },
//         ],
//     });
// });

//Carga Inicial de las interacciones
function init() {
  frmUsuario.addEventListener("submit", function (e) {
    guardar(e);
  });
}

//Guardar el usuario
function guardar(e) {
  e.preventDefault();
  let datos = new FormData(frmUsuario);

  fetch("http://localhost/curso_php/Bibliosoft/Usuario/formAdd", {
    method: "POST",
    body: datos,
  })
    .then((response) => response.json())
    .then((data) => {
      Swal.fire({
        title: data,
        icon: "success",
        confirmButtonText: "Ok",
      });
    })
    .catch((error) => {
      console.log("hay un error :", error);
    });
}

const URLROOT = "http://localhost/curso_php/Bibliosoft/"
$(document).ready(function () {
    var table = $("#tblUsuario").DataTable({
      autoWidth: false,
      ajax: {
        url: "http://localhost/curso_php/Bibliosoft/Usuario/datatable",
        dataSrc: "",
      },
      columns: [
        { data: 'idUsuario' },
        { data: 'nombre1Usuario' },
        { data: 'nombre2Usuario' },
        { data: 'apellido1Usuario' },
        { data: 'apellido2Usuario' },
        { data: 'telefonoUsuario' },
        { data: 'emailUsuario' },
        { data: 'nombreRol' },
        {
          data: null,
          defaultContent:
            // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
            // `<a href="<?php echo URLROOT; ?>Usuario/update/<?php echo $usuario->idUsuario; ?>"><div class="badge badge-opacity-naranjamadera">Editar</div></a>`,
            "<button id='editar' data-bs-toggle='modal' data-bs-target='#modalEditar' class='badge badge-opacity-naranjamadera'>Editar</button>",
        },
      ],
    });
  
    // $("#tblItems tbody").on("click", "#agregar", function () {
    //   var data = table.row($(this).parents("tr")).data();//captura info
    //   agregarDetalle(data.idItem, data.descripcion);
    //   //alert(data.idItem + "'s salary is: " + data.descripcion);
    // });
    $("#tblUsuario tbody").on("click", "#editar", function () {
      let data = table.row($(this).parents("tr")).data();
      modalEditar(data.idUsuario,data.nombre1Usuario);
    });
  });

  function modalEditar(id, nombre) {
    let contenido = document.getElementById("contenidoEditarModal");
    let filas = `
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
          <p>¿Desea hacer cambios al usuario ${nombre}?</p>
  
          </div>
          <div class="modal-footer">
          <a class="btn btn-primary" href="${URLROOT}Usuario/update/${id}" >Confirmar</a>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
          </div>
        `;
    contenido.innerHTML = filas;
  }

  {/* <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <p>¿Desea hacer cambios al usuario ${nombre}?</p>
  
          </div>
          <div class="modal-footer">
          <a class="btn btn-primary" href="${URLROOT}Usuario/update/${id}" >Confirmar</a>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
          </div>  */}
init();