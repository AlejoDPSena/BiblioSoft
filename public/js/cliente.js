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
      { data: "estadoCliente" },
      {
        data: null,
        defaultContent:
          // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
          "<button id='prestamo' data-bs-toggle='modal' data-bs-target='#modalPrestamo' class='badge badge-opacity-madera'>Prestamo</button>",
      },
      {
        data: null,
        defaultContent:
          // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
          "<button id='penalizacion' class='badge badge-opacity-madera'>Penalización</button>",
      },
      {
        data: null,
        defaultContent:
          // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
          "<button id='editar' class='badge badge-opacity-naranjamadera'>Editar</button>",
      },
    ]
  });

  $("#tblCliente tbody").on("click", "#prestamo", function () {
    let data = table.row($(this).parents("tr")).data();
    modalPrestamo(data.idCliente,data.nombreCliente);


    // $("#tblItems tbody").on("click", "#agregar", function () {
    //   var data = table.row($(this).parents("tr")).data();//captura info
    //   agregarDetalle(data.idItem, data.descripcion);
    //   //alert(data.idItem + "'s salary is: " + data.descripcion);
    // });
    //alert(data);
    //alert(data.idItem + "'s salary is: " + data.descripcion);
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