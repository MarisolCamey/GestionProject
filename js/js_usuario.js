
$(document).ready(function () {
    selRol();

});


function selRol(){

    $.get('../public/api/Rol', function (data) {

        var datos = JSON.parse(data);

        $.each(datos, function (contador, valor) {
            console.log(valor);

            $("#selRol").append(new Option(valor.NombreRol, valor.IdRol));

        });



    });



}


//esta funcion es llamada en el onclick de guardar
function EnviarInformacion(){


    //setea parametros para crear objeto de data que aqui lo llame datos y se puede llamar de cualquier forma
    var datos  = {"Nombre": $('#txtNombre').val(), 		//obtiene nombre de campo de texto
        "Correo":     $('#txtCorreo').val(),	//obtiene correo
        "Telefono":     $('#txtTelefono').val(),
        "NomUsuario":     $('#txtNombreUsuario').val(),
        "Pass":     $('#txtPass').val(),
        "Rol":     $('#selRol').val(),
        "IdUsuario": 	 sessionStorage.getItem('Usuario'),	//obtiene id seleccionado de estado
        "IdCompany": 	 sessionStorage.getItem('Compania')	//obtiene id seleccionado de estado
    };

    debugger;
    //la data se manda por ajax
    $.ajax({
        type: "POST",
        url: '../public/api/Usuario/nuevo',//esta url la copie del archivo proceso.php ahi estan los otros metodos
        data: datos
    });

    $("#datosUsuario")[0].reset();//limpia el formulario


    //muestra mensaje
    Swal.fire(  'Usuario guardado',  'Se ha registrado el Usuario '+$('#txtNombre').val(),  'success');
    //cierra modal
    $('#btn_cerrar_proc').click();





}



$(window).on('load', function(){
    $('#datosUsuario').modal('show');
});






$(document).ready(function() {

    var table =$('#TablaProcesos').DataTable( {


        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
            'print', 'pdf'
        ],
        "ajax": "../public/api/Oficina",
        "columns": [
            { "data": "NombreProceso" },
            { "data": "IdOficina" }


        ]
    } );
    setInterval(function () {
        table.ajax.reload(null, false);
    }, 10000);
    $('#TablaProcesos tbody').on('dblclick', 'td', function () {

        var data = table.row($( this ).parents('tr')).data();
        //$("#IngresoDatos").modal("show");
        $('#IngresoDatos').fadeIn();
        $('#txtCodigo').val(data['NombreProceso']);
        $('#txtNombre').val(data['IdOficina']);



    });


} );