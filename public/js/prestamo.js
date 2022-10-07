let URLROOT = "http://localhost/Aphp/hospv2/";
let medico = document.getElementById("medico");
let idMedico = document.getElementById("idMedico");
let frmFormula = document.getElementById("frmFormula");
let contador = 0; //conteo de la las filas del detalle

//Carga Inicial de las interacciones
function init() {
  frmFormula.addEventListener("submit", function (e) {
    guardar(e);
  });
}

//=========================================================================================================

/**
 *
 * Definicion de las interacciones
 */

//Guardar el documento
function guardar(e) {
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
}

//modal busqueda de pacientes
let tblpaciente = $("#tblPaciente").DataTable({
  autoWidth: false,
  ajax: {
    url: "http://localhost/Aphp/hospv2/Paciente/getALL",
    dataSrc: "",
  },
  columns: [
    {
      data: null,
      defaultContent:
        "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregarPaciente'>+</button>",
    },
    { data: "idPaciente" },
    { data: "nombrePaciente" },
    { data: "apellidosPaciente" },
    { data: "fechaNacimiento" },
    { data: "epsPaciente" },
  ],
});
//selecciona el paciente para agregarlo a la cabecera de la formula
$("#tblPaciente tbody").on("click", "#agregarPaciente", function () {
  var data = tblpaciente.row($(this).parents("tr")).data(); //captura la fila
  agregarDataPaciente(
    data.idPaciente,
    data.nombrePaciente,
    data.apellidosPaciente,
    data.fechaNacimiento,
    data.epsPaciente
  );
});

function agregarDataPaciente(id, nombre, apellidos, fecha, eps) {
  let idPaciente = document.getElementById("idPaciente");
  let nombrePaciente = document.getElementById("nombrePaciente");
  let fechaNacimiento = document.getElementById("fechaPaciente");
  let epsPaciente = document.getElementById("epsPaciente");
  idPaciente.value = id;
  nombrePaciente.value = apellidos + ", " + nombre;
  fechaNacimiento.value = fecha;
  epsPaciente.value = eps;
}

//modal busqueda de medicos

let tblMedico = $("#tblMedico").DataTable({
  autoWidth: false,
  ajax: {
    url: "http://localhost/Aphp/hospv2/Medico/getALL",
    dataSrc: "",
  },
  columns: [
    {
      data: null,
      defaultContent:
        "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregarMedico'>+</button>",
    },
    { data: "idMedico" },
    { data: "nombreMedico" },
    { data: "apellidosMedico" },
    { data: "emailMedico" },
    { data: "especialidadMedico" },
  ],
});
//selecciona el paciente para agregarlo a la cabecera de la formula
$("#tblMedico tbody").on("click", "#agregarMedico", function () {
  var data = tblMedico.row($(this).parents("tr")).data(); //captura la fila
  agregarDataMedico(
    data.idMedico,
    data.nombreMedico,
    data.apellidosMedico,
    data.emailMedico
  );
});

function agregarDataMedico(id, nombre, apellidos, email) {
  let idMedico = document.getElementById("idMedico");
  let nombreMedico = document.getElementById("nombreMedico");
  let emailMedico = document.getElementById("emailMedico");

  idMedico.value = id;
  nombreMedico.value = apellidos + ", " + nombre;
  emailMedico.value = email;
}

//para llenar el cuadro de busqueda de la modal de items
//$(document).ready(function () {
let tblItems = $("#tblItems").DataTable({
  autoWidth: false,
  ajax: {
    url: "http://localhost/Aphp/hospv2/Formula/getItems",
    dataSrc: "",
  },
  columns: [
    {
      data: null,
      defaultContent:
        "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Agregar +</button>",
    },
    { data: "idItem" },
    { data: "descripcion" },
  ],
});
//selecciona el  item para agregarlo al detalle de la formula
$("#tblItems tbody").on("click", "#agregar", function () {
  var data = tblItems.row($(this).parents("tr")).data(); //captura la fila
  agregarDetalle(data.idItem, data.descripcion);
});
//});

//agrega el item al detalle de la formula

function agregarDetalle(idItem, descripcion) {
  let cantidad = 0;
  let posologia = "";
  detalle = document.getElementById("detalle");
  fila = `  
  <tr id='filas' > 
  <td><input type="text" name="idItem[]" id="idItem[]" value ='${idItem}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="descripcion[]"  id="descripcion[]" value ='${descripcion}' class="form-control form-control-sm" readonly></td>
  <td><input type="number" name="cantidad[]"  id="cantidad[]" value ='${cantidad}' class="form-control form-control-sm"></td>
  <td><input type="text" name="posologia[]"  id="posologia[]" value ='${posologia}' class="form-control form-control-sm"></td>
  </tr>
  `;
  detalle.innerHTML += fila;
}

//======================================================================================================

//cargamos todo
init();
