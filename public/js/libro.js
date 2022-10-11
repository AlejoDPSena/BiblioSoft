/* $(document).ready(function () {
    $('#tblLibro').DataTable({
        ajax: {url:'http://localhost/curso_php/Bibliosoft/Libro/llenarTable', 
        dataSrc: ""
    },
        columns: [
            { data: 'idLibro' },
            { data: 'nombreLibro' },
            { data: 'categoriaLibro' },
            { data: 'autorLibro' },
            { data: 'cantidadLibro' },
            { data: 'detallesLibro' },
            { data: 'publicacionLibro' },
            { data: 'nombreEditorial' },
            {
                data: null,
                defaultContent:
                  // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
                  "<button id='prestamo' class='badge badge-opacity-madera'>Prestamo</button>",
              },
              {
                data: null,
                defaultContent:
                  // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
                  "<button id='penalizacion' class='badge badge-opacity-madera'>Penalización</button>",
              },
        ],
    });
}); */

const URLROOT = "http://localhost/curso_php/Bibliosoft/";
$(document).ready(function () {
    var table = $("#tblLibro").DataTable({
      autoWidth: false,
      ajax: {
        url: URLROOT+"Libro/llenarTable",
        dataSrc: "",
      },
      columns: [
            { data: 'idLibro' },
            { data: 'nombreLibro' },
            { data: 'categoriaLibro' },
            { data: 'autorLibro' },
            { data: 'cantidadLibro' },
            { data: 'detallesLibro' },
            { data: 'publicacionLibro' },
            { data: 'nombreEditorial' },
        {
          data: null,
          defaultContent:
            // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
            "<button id='editar' data-bs-toggle='modal' data-bs-target='#modalEditar' class='badge badge-opacity-madera'>Editar</button>",
        },
        {
          data: null,
          defaultContent:
            // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
            "<button id='eliminar' class='badge badge-opacity-madera'  data-bs-toggle='modal' data-bs-target='#modalEliminar'>Eliminar</button>",
        },
      ],
    });

    $("#tblLibro tbody").on("click", "#editar", function () {
        let data = table.row($(this).parents("tr")).data();
        modalEditar(data.idLibro, data.nombreLibro);
        //alert(data);
        //alert(data.idItem + "'s salary is: " + data.descripcion);
      });

    $("#tblLibro tbody").on("click", "#eliminar", function () {
        let data = table.row($(this).parents("tr")).data();
        modalEliminar(data.idLibro, data.nombreLibro);
        //alert(data);
        //alert(data.idItem + "'s salary is: " + data.descripcion);
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
        <p>¿Desea hacer cambios al libro ${nombre}?</p>

        </div>
        <div class="modal-footer">
        <a class="btn btn-primary" href="${URLROOT}Libro/formUpdateBook/${id}" >Confirmar</a>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        </div>
      `;
  contenido.innerHTML = filas;
}


//funcion para abrir el modal de eliminar con la pregunta de confirmacion
function modalEliminar(id, titulo) {
    let preguntaEliminar = document.getElementById("preguntaEliminar");
    let fila = `
        <p>deseas eliminar el libro ${titulo}?</p>
        <input type="hidden" id="idEliminar" name="id" value="${id}">  
        `;
    preguntaEliminar.innerHTML = fila;
}

//boton del modal eliminar para enviar el nit
let confirmarDelete = document.getElementById("confirmarDelete");
//evento click para enviar el nit a el controlador
confirmarDelete.addEventListener("click", (e) => {
  let datos = document.getElementById("idEliminar").value;
  fetch(URLROOT+"libro/deleteBook/"+datos, {
    method: "POST"
  })
    .then(function (response) {
      if (response.ok) {
        return response.ok;
      } else {
        throw "Error en la llamada Ajax";
      }
    })
    .then(function (ok) {
      alertDelete();
    })
    .catch(function (err) {
        alertNoDelete(err);
    });
});

function alertDelete() {
    Swal.fire({
      title: "Hecho!!",
      text: "libro eliminado",
      icon: "success",
      confirmButtonText: "ok",
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        location.reload();
      }
    });
}

function alertNoDelete() {
    Swal.fire({
      title: "Error!!",
      text: "No se pudo eliminar el libro",
      icon: "error",
      confirmButtonText: "ok",
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        location.reload();
      }
    });
}