$(document).ready(function () {
    $('#tblEditorial').DataTable({
        ajax: {url:'http://localhost:8080/CursoPHP-master/BiblioSoft/Editorial/dataTable', dataSrc: ""},
        columns: [
            { data: 'idEditorial' },
            { data: 'nombreEditorial' },
            { data: 'telefonoEditorial' },
            { data: 'ubicacionEditorial' }
        ],
    });
});