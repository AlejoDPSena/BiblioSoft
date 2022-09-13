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
            '<a href="<?php echo URLROOT; ?>Usuario/formUpdate/<?php echo $usuario->idUsuario; ?>"><div class="badge badge-opacity-primary">Editar</div></a>',
        },
      ],
    });
  
    // $("#tblItems tbody").on("click", "#agregar", function () {
    //   var data = table.row($(this).parents("tr")).data();//captura info
    //   agregarDetalle(data.idItem, data.descripcion);
    //   //alert(data.idItem + "'s salary is: " + data.descripcion);
    // });
  });