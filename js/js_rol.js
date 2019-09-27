
$(document).ready(function () {

});




//esta funcion es llamada en el onclick de guardar
function EnviarInformacion(){
    //setea parametros para crear objeto de data que aqui lo llame datos y se puede llamar de cualquier forma
    var datos  = {"NombreRol": $('#txtRol').val(), 		//obtiene nombre de campo de texto
        "IdUsuario": 	 sessionStorage.getItem('Usuario')	//obtiene id seleccionado de estado
    };


    //la data se manda por ajax
    $.ajax({
        type: "POST",
        url: '../public/api/Rol/nuevo',//esta url la copie del archivo proceso.php ahi estan los otros metodos
        data: datos
    });

    $("#datosRol")[0].reset();//limpia el formulario

//muestra mensaje
    Swal.fire(  'Rol guardado',  'Se ha registrado el Rol '+$('#txtRol').val(),  'success');
    //cierra modal
    $('#btn_cerrar_proc').click();
}

$(window).on('load', function(){
    $('#datosRol').modal('show');
});





$(document).ready(function() {

    var table =$('#TablaRol').DataTable( {


        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
            'print', 'pdf'
        ],
        "ajax": "../public/api/Oficina",
        "columns": [
            { "data": "NombreRol" }



        ]
    } );
    setInterval(function () {
        table.ajax.reload(null, false);
    }, 10000);
    $('#TablaRol tbody').on('dblclick', 'td', function () {

        var data = table.row($( this ).parents('tr')).data();
        //$("#IngresoDatos").modal("show");
        $('#IngresoDatos').fadeIn();
        $('#txtCodigo').val(data['NombreRol']);



    });


} );