let medico = document.getElementById("medico");
let idMedico = document.getElementById("idMedico");
let frmFormula = document.getElementById("frmFormula");
let contador = 0; //conteo de la las filas del detalle

//Carga Inicial de las interacciones
/* function init() {
  frmFormula.addEventListener("submit", function (e) {
    guardar(e);
  });
} */

//=========================================================================================================

/**
 *
 * Definicion de las interacciones
 */

//Guardar el documento
/* function guardar(e) {
  e.preventDefault();
  let datos = new FormData(frmFormula);

  fetch("http://localhost/Aphp/hospv2/Formula/guardar", {
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
} */

const URLROOT = "http://localhost/curso_php/Bibliosoft/";

//para llenar el cuadro de busqueda de la modal de items
$(document).ready(function () {
  var tableLibros = $("#tblLibros").DataTable({
    autoWidth: false,
    ajax: {
      url: URLROOT + "Libro/llenarTable",
      dataSrc: "",
    },
    columns: [
      {
        data: null,
        defaultContent:
          "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregarLibro'>+</button>",
      },
      { data: "idLibro" },
      { data: "nombreLibro" },
      { data: "categoriaLibro" },
      { data: "autorLibro" },
      { data: "cantidadLibro" },
      { data: "detallesLibro" },
      { data: "publicacionLibro" },
      { data: "nombreEditorial" },
    ],
  });
  //selecciona el  item para agregarlo al detalle de la formula
  $("#tblLibros tbody").on("click", "#agregarLibro", function () {
    var data = tableLibros.row($(this).parents("tr")).data(); //captura la fila
    agregarDetalle(data.idLibro, data.nombreLibro,data.categoriaLibro,data.autorLibro,data.cantidadLibro,data.detallesLibro,data.publicacionLibro,data.nombreEditorial);
  });
});

//agrega el item al detalle de la formula

function agregarDetalle(id, nombre,categoria,autor,cantidad,detalles,publicacion,nombreEditorial) {
  
  detalle = document.getElementById("detalle");
  fila = `  
  <tr id='filas' > 
  <td><input type="text" name="idItem[]" id="idItem[]" value ='${id}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="descripcion[]"  id="descripcion[]" value ='${nombre}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="descripcion[]"  id="descripcion[]" value ='${categoria}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="descripcion[]"  id="descripcion[]" value ='${autor}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="descripcion[]"  id="descripcion[]" class="form-control form-control-sm"></td>
  <td><input type="text" name="descripcion[]"  id="descripcion[]" value ='${detalles}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="descripcion[]"  id="descripcion[]" value ='${publicacion}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="descripcion[]"  id="descripcion[]" value ='${nombreEditorial}' class="form-control form-control-sm" readonly></td>
  </tr>
  `;
  detalle.innerHTML += fila;
}

//======================================================================================================

//cargamos todo
//init();
