// $(document).ready(function () {
//     $('#tblCliente').DataTable({
//         ajax: {
//             url:'http://localhost/curso_php/Bibliosoft/Cliente/datatable',
//             dataSrc: ''
//         },
//         columns: [
//             { data: 'idCliente' },
//             { data: 'nombreCliente' },
//             { data: 'apellidoCliente' },
//             { data: 'telefonoCliente' },
//             { data: 'estadoCliente' }
//         ],
//     });
// });

const URLROOT = "http://localhost/curso_php/Bibliosoft/"

$(document).ready(function () {
  var table = $("#tblCliente").DataTable({
    autoWidth: false,
    ajax: {
      url: URLROOT+"Cliente/datatable",
      dataSrc: "",
    },
    columns: [
      { data: "idCliente" },
      { data: "nombreCliente" },
      { data: "apellidoCliente" },
      { data: "telefonoCliente" },
      // { data: "estadoCliente" },
      {
        data: "estadoCliente",
        render: function (data) {
            return 1 === 1
                ? '<button id="estado" data-bs-toggle="modal" data-bs-target="#modalEstado" class="badge badge-opacity-madera">'+data+'</button>'
                : data;
        /* defaultContent:
          // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
          `<button id='estado' data-bs-toggle='modal' data-bs-target='#modalEstado' class='badge badge-opacity-madera'>${data}</button>`, */
      }},
      {
        data: null,
        defaultContent:
          // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
          "<button id='prestamo' data-bs-toggle='modal' data-bs-target='#modalPrestamo' class='badge badge-opacity-madera'>Prestamo</button>",
      },
      // {
      //   data: null,
      //   defaultContent:
      //     // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
      //     "<button id='penalizacion' class='badge badge-opacity-madera'>Penalización</button>",
      // },
      {
        data: null,
        defaultContent:
          // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
          "<button id='editar' data-bs-toggle='modal' data-bs-target='#modalEditar' class='badge badge-opacity-naranjamadera'>Editar</button>",
      },
    ]
  });

  $("#tblCliente tbody").on("click", "#prestamo", function () {
    let data = table.row($(this).parents("tr")).data();
    modalPrestamo(data.idCliente,data.nombreCliente);
  });

  $("#tblCliente tbody").on("click", "#editar", function () {
    let data = table.row($(this).parents("tr")).data();
    modalEditar(data.idCliente,data.nombreCliente);
  });

  $("#tblCliente tbody").on("click", "#estado", function () {
    let data = table.row($(this).parents("tr")).data();
    modalEstado(data.idCliente,data.nombreCliente);
  });
});

function modalPrestamo(id, nombre) {
  let contenido = document.getElementById("contenidoPrestamoModal");
  let filas = `
  <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">PRESTAMO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>¿Desea hacer un prestamo a ${nombre}?</p>

        </div>
        <div class="modal-footer">
        <a class="btn btn-primary" href="${URLROOT}Cliente/crearPrestamo/${id}" >Confirmar</a>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        </div>      
      `;
  contenido.innerHTML = filas;
}

function modalEditar(id, nombre) {
  let contenido = document.getElementById("contenidoEditarModal");
  let filas = `
  <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>¿Desea hacer cambios al cliente ${nombre}?</p>

        </div>
        <div class="modal-footer">
        <a class="btn btn-primary" href="${URLROOT}Cliente/update/${id}" >Confirmar</a>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        </div>      
      `;
  contenido.innerHTML = filas;
}

function modalEstado(id, nombre) {
  let contenido = document.getElementById("contenidoEstadoModal");
  let filas = `
  <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Estado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>¿Desea cambiar el estado del cliente ${nombre}?</p>

        </div>
        <div class="modal-footer">
        <a class="btn btn-primary" href="${URLROOT}Cliente/updateEstado/${id}" >Confirmar</a>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        </div>      
      `;
  contenido.innerHTML = filas;
}