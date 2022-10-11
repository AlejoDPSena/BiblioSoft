const URLROOT = "http://localhost/curso_php/Bibliosoft/"
$(document).ready(function () {
    var table =$('#tblEditorial').DataTable({
        ajax: {url:'http://localhost/curso_php/Bibliosoft/Editorial/dataTable', dataSrc: ""},
        columns: [
            { data: 'idEditorial' },
            { data: 'nombreEditorial' },
            { data: 'telefonoEditorial' },
            { data: 'ubicacionEditorial' },
            {
              data: null,
              defaultContent:
                // "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Editar</button>",
                // `<a href="<?php echo URLROOT; ?>Usuario/update/<?php echo $usuario->idUsuario; ?>"><div class="badge badge-opacity-naranjamadera">Editar</div></a>`,
                "<button id='editar' data-bs-toggle='modal' data-bs-target='#modalEditar' class='badge badge-opacity-naranjamadera'>Editar</button>",
            },
        ],

    });
    $("#tblEditorial tbody").on("click", "#editar", function () {
        let data = table.row($(this).parents("tr")).data();
        modalEditar(data.idEditorial, data.nombreEditorial);
      });
});

function modalEditar(id,nombre) {
    let contenido = document.getElementById("contenidoEditarModal");
    let filas = `
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Desea hacer cambios la editorial ${nombre}?</p>
  
          </div>
  <div class="modal-footer">
          <a class="btn btn-primary" href="${URLROOT}Editorial/formUpdateEditorial/${id}" >Confirmar</a>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
          </div>
        `;
    contenido.innerHTML = filas;
  }

  /*  */

//http://localhost:8080/CursoPHP-master/BiblioSoft/Editorial/dataTable