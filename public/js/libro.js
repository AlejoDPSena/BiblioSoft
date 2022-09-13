$(document).ready(function () {
    $('#tblLibro').DataTable({
        ajax: {url:'http://localhost:8080/curso_php/BiblioSoft/Libro/llenarTable', dataSrc: ""},
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