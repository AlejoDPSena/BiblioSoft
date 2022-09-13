$(document).ready(function () {
    $('#tblLibro').DataTable({
        ajax: {url:'http://localhost/curso_php/BiblioSoft/libro/dataTable', dataSrc: ""},
        columns: [
            { data: 'idLibro' },
            { data: 'nombreLibro' },
            { data: 'categoriaLibro' },
            { data: 'autorLibro' },
            { data: 'cantidadLibro' },
            { data: 'detallesLibro' },
            { data: 'publicacionLibro' },
            { data: 'nombreEditorial' }
        ],
    });
});