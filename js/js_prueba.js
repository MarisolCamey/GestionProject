

$(document).ready(function() {

   mostrarCalendario();
    var data =$('#mostrarCalenario').modal( {
        "ajax": "./api/Vacaciones.php",
        "columns": [
            { "data": "RHIdVacaciones" },
            { "data": "RHDescripcion" },
            { "data": "RHCodEmp" },
            { "data": "RHMotivo" },
            { "data": "RHFechaInicio" },
            { "data": "RHFechaFin" },
            { "data": "RHColor" },
            { "data": "ffffff" },


        ]
    } );


    $('#ModalEventos tbody').on('dblclick', 'td', function () {

        var data = data.row($( this ).parents('tr')).data();
        //$("#IngresoDatos").modal("show");

        ('#idVacaciones').val(calEvent.id);
        $('#txtCodigo').val(calEvent.codEmpleado);
        FechaInicio= calEvent.start._i.split (" ");
        FechaFin= calEvent.end._i.split (" ");
        $('#txtFechaInicio').val(FechaInicio[0]);
        $('#txtFechaFin').val(FechaFin[0]);
        $('#txtMotivo').val(calEvent.title);
        $('#txtColor').val(calEvent.color);
        $('#txtDescripcion').val(calEvent.descripcion);


        $('#ModalEventos').modal();

        // $("#btnGuardarPersonal").show();
        // $("#Cerrar").show();


        //alert('click' +data[0]+'\'s row');
    });


} );

function mostrarCalendario(){
    var arreglado;

    var dataVacaciones = $.ajax({
        url: './api/Vacaciones.php',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data;

            arreglado = json.map( item=>  {

                return { id: item.RHIdVacaciones,
                    descripcion: item.RHDescripcion,
                    codEmpleado: item.RHCodEmp,
                    title: item.RHMotivo,
                    start : item.RHFechaInicio,
                    end: item.RHFechaFin,
                    color: item.RHColor,
                    textColor: "#ffffff" };
            });

            console.log(arreglado);
        },

        error: function (data) {
            alert("No se lograron cargar los datos" + data.responseText);
        }
    });


    $.when(dataVacaciones).done(function (){

        $('#RRHH2').fullCalendar({
            header: {
                left: 'today,prev,next',
                center: 'title',
                right: 'month,basicWeek, basicDay, agendaWeek, agendaDay, Mibotton'
            },



            dayClick: function (date, jsEvent, view) {

                $('#txtFechaInicio').val(date.format());
                $("#ModalEventos").modal();
            },

            events: arreglado,




            eventClick: function (calEvent, jsEvent, view) {
                $('#idVacaciones').val(calEvent.id);
                $('#txtCodigo').val(calEvent.codEmpleado);
                FechaInicio= calEvent.start._i.split (" ");
                FechaFin= calEvent.end._i.split (" ");
                $('#txtFechaInicio').val(FechaInicio[0]);
                $('#txtFechaFin').val(FechaFin[0]);
                $('#txtMotivo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);

                $('#ModalEventos').modal();
            }

        });
    });
}

function EnviarInformacion() {

    var RHIdVacaciones = $('#idVacaciones').val();
    var RHDescripcion = $('#txtCodigo').val();
    var RHCodEmp =$('#txtFechaInicio').val();
    var RHMotivo =  $('#txtFechaFin').val();
    var RHFechaInicio =$('#txtMotivo').val();
    var RHFechaFin = $('#txtColor').val();
    var RHColor =  $('#txtDescripcion').val();



    console.log(RHIdVacaciones);
    console.log(RHDescripcion);
    console.log(RHCodEmp);
    console.log(RHMotivo);
    console.log(RHFechaInicio);
    console.log(RHFechaFin);
    console.log(RHSalAlm);
    console.log(RHColor);

    var data = {
        RHIdVacaciones:idVacaciones,
        RHDescripcion:txtCodigo,
        RHCodEmp:txtFechaInicio,
        RHMotivo:txtFechaFin,
        RHFechaInicio:txtMotivo,
        RHFechaFin:txtColor,
        RHColor:txtDescripcion,


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
            alert("hay un error...");
        }

    });

    //table.ajax.reload(null,false);
    table.draw(false);
    // $("#btnGuardarPersonal").hide();

    $('#RRHH2').fullCalendar('refetchEvents');
    $('#ModalEventos').fadeOut();

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

    $.ajax(
        {
            type:'PUT',

            url:'./api/Vacaciones.php?RHCodEmp='+ RHCodEmp,
            data:data,
            success:function (msg){
                if (msg) {
                    alert("datos modificados correctamente");
                }
            },
            error:function(){
                alert("error en modificacion...");
            }
        }
    );
    //table.draw(false);
    // $("#btnGuardarPersonal").hide();


    $('#RRHH2').fullCalendar('refetchEvents');
    $('#ModalEventos').modal('toggle');
    console.log("si llega");
}

function Eliminar(RHCodEmp) {
    console.log(RHCodEmp);
    $.ajax(
        {
            type:'DELETE',
            url:'./api/Vacaciones.php?RHCodEmp='+ RHCodEmp,
            success:function (msg){
                if (msg) {
                    alert("datos ingresados correctamente");
                }
            },
            /* error:function(){
                 alert("hay un error...");
             }*/
        }
    );
    $('#ModalEventos').fadeOut();


}




