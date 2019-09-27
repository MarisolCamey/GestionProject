
$(document).ready(function () {
    selTipoOficina();

});


function selTipoOficina(){


    $.get('../public/api/Oficina', function (data) {

        var datos = JSON.parse(data);



        $.each(datos, function (contador, valor) {
            console.log(valor);

            $("#selTipoOficina").append(new Option(valor.NomOficina, valor.IdOficina));

        });



    });



}


//esta funcion es llamada en el onclick de guardar
function EnviarInformacion(){
	
	
    //setea parametros para crear objeto de data que aqui lo llame datos y se puede llamar de cualquier forma
    var datos  = {"NombreProceso": $('#txtProceso').val(), 		//obtiene nombre de campo de texto
        "IdOficina":     $('#selTipoOficina').val(),	//obtiene id seleccionado de oficina
        "IdUsuario": 	 sessionStorage.getItem('Usuario')	//obtiene id seleccionado de estado
    };

	debugger;
    //la data se manda por ajax
    $.ajax({
        type: "POST",
        url: '../public/api/Proceso/nuevo',//esta url la copie del archivo proceso.php ahi estan los otros metodos
        data: datos
    });

    $("#datosProceso")[0].reset();//limpia el formulario
	
	
		//muestra mensaje
		Swal.fire(  'Proceso guardado',  'Se ha registrado el proceso '+$('#txtProceso').val(),  'success');
		//cierra modal
		$('#btn_cerrar_proc').click();
		
		
	


}



$(window).on('load', function(){
    $('#datosProceso').modal('show');

    //despues de guardar actualiza tabla
    cargaTabla();
});




function cargaTabla(){

//prueba a borrar la tabla
    try{
        $("#TablaProcesos").dataTable().fnDestroy();
    }
    catch(exception){
//sino no hace nada
    }


//crear tabla
    $.ajax({
        type: "GET",
        url: '../public/api/Proceso',
        success: function(response){
            datos = JSON.parse(response);//obtiene json y lo envia como datos a tabla
            $('#TablaProcesos').DataTable( {
                data: datos,
                columns: [
                    { data: 'IdProceso', },//columnas a mostrar
                    { data: 'NombreProceso' }
                ],
                "oSearch": {"bSmart": false,
                    "bRegex": true,
                    "sSearch": ""  },//busca un dato exacto
                dom: 'Blfrtip',
                buttons: [
                    'print', 'pdf'
                ],
            });


        }
    });

}



$(window).on('load', function(){
    $('#datosProceso').modal('show');
});


$(document).ready(function() {
        //llena combo
        selTipoOficina();
        //llena tabla
        cargaTabla();

    }


);