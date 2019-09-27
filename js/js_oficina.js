


function selUsuario(){
    $.get('../public/api/Usuario', function (data) {
        debugger;
        var datos = JSON.parse(data);
debugger;
        $.each(datos, function (contador, valor) {
            console.log(valor);

            $("#selUsuario").append(new Option(valor.Nombre, valor.IdUsuario));

        });
    });



    function selOficina(){
        $.get('../public/api/Oficina', function (data) {

            var datos = JSON.parse(data);
            $.each(datos, function (contador, valor) {
                console.log(valor);

                $("#selOficina").append(new Option(valor.NomOficina, valor.IdOficina));
            });
        });







//esta funcion es llamada en el onclick de guardar
function EnviarInformacion1(){


    //setea parametros para crear objeto de data que aqui lo llame datos y se puede llamar de cualquier forma
    var datos  = {"NomOficina": $('#txtNombreOf').val(), 		//obtiene nombre de campo de texto
        "Departamento":     $('#txtDepartamento').val(),	//obtiene id seleccionado de oficina
            "Correo":     $('#txtCorreo').val(),
        "Telefono":     $('#txtTelefono').val(),

        "IdUsuario": 	 sessionStorage.getItem('Usuario'),	//obtiene id seleccionado de estado
        "IdCompany": 	 sessionStorage.getItem('Compania')	//obtiene id seleccionado de estado

    };

    debugger;
    //la data se manda por ajax
    $.ajax({
        type: "POST",
        url: '../public/api/Oficina/nuevo',//esta url la copie del archivo proceso.php ahi estan los otros metodos
        data: datos,

    });

    $("#datosOficina")[0].reset();//limpia el formulario


    //muestra mensaje
    Swal.fire(  'Oficina guardada',  'Se ha registrado la Oficina '+$('#txtNombreOf').val(),  'success');
    //cierra modal
    $('#btn_cerrar_proc').click();





}


$(window).on('load', function(){
    $('#datosOficina').modal('show');
});





        $(document).ready(function () {

            selUsuario();
            selOficina();
        })




