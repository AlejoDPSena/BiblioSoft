$(document).ready(function () {
    $('#tblCliente').DataTable({
        ajax: {
            url:'http://localhost/curso_php/Bibliosoft/Cliente/datatable', 
            dataSrc: ''
        },
        columns: [
            { data: 'idCliente' },
            { data: 'nombreCliente' },
            { data: 'apellidoCliente' },
            { data: 'telefonoCliente' },
            { data: 'estadoCliente' }
        ],
    });
});