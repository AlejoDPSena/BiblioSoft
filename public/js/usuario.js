$(document).ready(function () {
    $('#tblUsuario').DataTable({
        ajax: {
            url: 'http://localhost/curso_php/Bibliosoft/Usuario/datatable',
            dataSrc: ''
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
        ],
    });
});