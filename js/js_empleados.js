

$(document).ready(function() {

    var table =$('#tbempleados').DataTable( {


        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
            'print', 'pdf'
        ],
        "ajax": "./api/Empleados.php",
        "columns": [
            { "data": "RHCodEmp" },
            { "data": "RHNomEmp" },
            { "data": "RHPueFun" },
            { "data": "RHPueNom" },
            { "data": "RHDep" },
            { "data": "RHEnt" },
            { "data": "RHSalAlm" },
            { "data": "RHEntAlm" },
            { "data": "RHSal" }

        ]
    } );
    setInterval(function () {
        table.ajax.reload(null, false);
    }, 10000);
    $('#tbempleados tbody').on('dblclick', 'td', function () {

        var data = table.row($( this ).parents('tr')).data();
        //$("#IngresoDatos").modal("show");
        $('#IngresoDatos').fadeIn();
        $('#txtCodigo').val(data['RHCodEmp']);
        $('#txtNombre').val(data['RHNomEmp']);
        $('#txtPuesto').val(data['RHPueFun']);
        $('#PuestoN').val(data['RHPueNom']);
        $('#txtDepto').val(data['RHDep']);
        $('#txtEntrada').val(data['RHEnt']);
        $('#txtSalida').val(data['RHSal']);
        $('#txtSalidaA').val(data['RHSalAlm']);
        $('#txtEntradaA').val(data['RHEntAlm']);

       // $("#btnGuardarPersonal").show();
       // $("#Cerrar").show();


        //alert('click' +data[0]+'\'s row');
    });


} );



function EnviarInformacion() {
   
    var RHCodEmp = $('#txtCodigo').val();
    var RHNomEmp = $('#txtNombre').val();
    var RHPueFun =$('#txtPuesto').val();
    var RHPueNom =  $('#PuestoN').val();
    var RHDep =$('#txtDepto').val();
    var RHEnt = $('#txtEntrada').val();
    var RHSal =  $('#txtSalida').val();
    var RHSalAlm = $('#txtSalidaA').val();
    var RHEntAlm = $('#txtEntradaA').val();

    console.log(RHCodEmp);
    console.log(RHNomEmp);
    console.log(RHPueFun);
    console.log(RHPueNom);
    console.log(RHDep);
    console.log(RHEnt);
    console.log(RHSal);
    console.log(RHSalAlm);
    console.log(RHEntAlm);

   var data = {
        RHCodEmp:RHCodEmp,
        RHNomEmp:RHNomEmp,
        RHPueFun:RHPueFun,
       RHPueNom:RHPueNom,
        RHDep:RHDep,
        RHEnt:RHEnt,
       RHSal:RHSal,
        RHSalAlm:RHSalAlm,
        RHEntAlm:RHEntAlm

		};

    console.log(data);
    $.ajax({
            type:'POST',
            url:'./api/Empleados.php?RHCodEmp='+ RHCodEmp,
            data:data,
            success:function (msg){
                if (msg) {
                    alert("datos ingresados correctamente");

                }
            },
            error:function(){
                Swal.fire(
                    'Listo!',
                );
            }

        });

    //table.ajax.reload(null,false);
    table.draw(false);
   // $("#btnGuardarPersonal").hide();

    $("#datosUsuario")[0].reset();//limpia el formulario
    $('#IngresoDatos').fadeOut();

    console.log("si llega");

}




function ModificarInformacion(RHCodEmp) {

    var RHCodEmp = $('#txtCodigo').val();
    var RHNomEmp = $('#txtNombre').val();
    var RHPueFun =$('#txtPuesto').val();
    var RHPueNom =  $('#PuestoN').val();
    var RHDep =$('#txtDepto').val();
    var RHEnt = $('#txtEntrada').val();
    var RHSal =  $('#txtSalida').val();
    var RHSalAlm = $('#txtSalidaA').val();
    var RHEntAlm = $('#txtEntradaA').val();

   var data = {
        RHCodEmp:RHCodEmp,
        RHNomEmp:RHNomEmp,
        RHPueFun:RHPueFun,
        RHPueNom:RHPueNom,
        RHDep:RHDep,
        RHEnt:RHEnt,
        RHSal:RHSal,
        RHSalAlm:RHSalAlm,
        RHEntAlm:RHEntAlm,


    };
console.log(data);

    $.ajax(
        {
            type:'PUT',

            url:'./api/Empleados.php?RHCodEmp='+ RHCodEmp +'&RHNomEmp='+ RHNomEmp +'&RHPueFun=' + RHPueFun +'&RHPueNom=' + RHPueNom + '&RHDep='
            + RHDep + '&RHEnt=' + RHEnt + '&RHSal=' + RHSal+'&RHSalAlm='+ RHSalAlm + '&RHEntAlm='+ RHEntAlm,

           /*success:function (msg){
                if (msg) {
                    alert("datos modificados correctamente");
                }


            },
            error:function(){
                Swal.fire(
                'Listo!',
            );
            }*/

            success: function (response) {
                console.log(response);


            },
            error: function (data) {
                console.log(data);
            }
        }
    );


    //table.draw(false);


    $('#IngresoDatos').fadeOut();
    //$("#datosUsuario")[0].reset();//limpia el formulario
   // $('#IngresoDatos').modal('toggle');
    console.log("si llega");
}

function Eliminar(RHCodEmp) {
    console.log(RHCodEmp);
    $.ajax(
        {
            type:'DELETE',
            url:'./api/Empleados.php?RHCodEmp='+ RHCodEmp,
            success:function (msg){
                if (msg) {
                    alert("datos ingresados correctamente");
                }
            },
           error:function(){
               Swal.fire(
                   'Listo!',
               );
            }
        }
    );
    $('#IngresoDatos').fadeOut();


}




