$(document).ready(function () {
    $('#tblEditorial').DataTable({
        ajax: {url:'http://localhost/curso_php/BiblioSoft/Editorial/dataTable', dataSrc: ""},
        columns: [
            { data: 'idEditorial' },
            { data: 'nombreEditorial' },
            { data: 'telefonoEditorial' },
            { data: 'ubicacionEditorial' }
        ],
    });
});

//http://localhost:8080/CursoPHP-master/BiblioSoft/Editorial/dataTable