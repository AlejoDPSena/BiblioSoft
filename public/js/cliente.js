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

$(document).ready(function () {
    var table = $("#tblCliente").DataTable({
      autoWidth: false,
      ajax: {
        url: "http://localhost/curso_php/Bibliosoft/Cliente/datatable",
        dataSrc: "",
      },
      columns: [
        { data: 'idCliente' },
        { data: 'nombreCliente' },
        { data: 'apellidoCliente' },
        { data: 'telefonoCliente' },
        { data: 'estadoCliente' },
        {
          data: null,
          defaultContent:
            // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
            "<a href='<?php echo URLROOT; ?>Usuario/formUpdate/<?php echo $usuario->idUsuario; ?>'><div class='badge badge-opacity-madera'>Penalización</div></a>",
        },
        {
            data: null,
            defaultContent:
              // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
              "<a href='<?php echo URLROOT; ?>Usuario/formUpdate/<?php echo $usuario->idUsuario; ?>'><div class='badge badge-opacity-naranjamadera'>Editar</div></a>",
          },
      ],
    });
  
    // $("#tblItems tbody").on("click", "#agregar", function () {
    //   var data = table.row($(this).parents("tr")).data();//captura info
    //   agregarDetalle(data.idItem, data.descripcion);
    //   //alert(data.idItem + "'s salary is: " + data.descripcion);
    // });
  });