$(document).ready(function () {

   mostrarCalendario();

});


function mostrarCalendario(){
    var arreglado;

    var dataVacaciones = $.ajax({
        url: './api/Vacaciones.php',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
                var json = data;

               /* arreglado = json.map( item => {
                  return { title: item.RHMotivo ,
                           start : item.RHFechaInicio,
                           end: item.RHFechaFin,
                           color: item.RHColor,
                           textColor: "#ffffff" };
                });*/

            arreglado = json.data.map ( item=>  {

                        return { id: item.RHIdVacaciones,
                            descripcion: item.RHDescripcion,
                            codEmpleado: item.RHCodEmp,
                            title: item.RHNomMostrar,
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
            right: 'month,basicWeek, basicDay,  Mibotton'
           // right: 'month,basicWeek, basicDay, agendaWeek, agendaDay, Mibotton'
        },

       viewRender: function(view, element) {//muestra solo el nombre del mes y el año
           $('.fc-center')[0].children[0].innerText = view.title.replace(new RegExp("undefined", 'g'), "");
       },

        dayClick: function (date, jsEvent, view) {

                                $('#txtFechaInicio').val(date.format());
                               $("#ModalEventos").modal();
                            },

                            events: arreglado,






       eventClick: function (calEvent, jsEvent, view) {
           $('#idVacaciones').val(calEvent.id);
           $('#txtCodigoEmpleado').val(calEvent.codEmpleado);
           FechaInicio= calEvent.start._i.split (" ");
           FechaFin= calEvent.end._i.split (" ");
           $('#txtFechaInicio').val(FechaInicio[0]);
           $('#txtFechaFin').val(FechaFin[0]);
           $('#txtNombreEmpleado').val(calEvent.title);
           $('#txtColor').val(calEvent.color);
           $('#txtDescripcion').val(calEvent.descripcion);

           $('#ModalEventos').modal();
       }

                        });
    });
}

/*-----------------------------------------------------*/
var NuevoEvento;
function btnAgregar() {
    RecolectarDatosGUI();
    EnviarInformacion('agregar',NuevoEvento);
    console.log("btnAgregar");

    $('#RRHH2').fullCalendar('renderEvent', NuevoEvento);
    mostrarCalendario();
    //$('#btn_vacaciones').click();
    // fnOpenForm(event, 'Vacaciones')

};



function btnEliminar(RHIdVacaciones) {//prueba
    $.ajax(
        {
            type:'DELETE',
            url:'./api/Vacaciones.php?RHIdVacaciones='+RHIdVacaciones,
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

    $('#RRHH2').fullCalendar('renderEvent', NuevoEvento);

};
function btnModificar() {
    RecolectarDatosGUI();
    ModificarInformacion('modificar',NuevoEvento);
    console.log("btnModificar");

    $('#RRHH2').fullCalendar('renderEvent', NuevoEvento);



};

function RecolectarDatosGUI() {

    NuevoEvento = {
        RHIdVacaciones: $('#idVacaciones').val(),
        RHFechaInicio: $('#txtFechaInicio').val(),
        RHFechaFin: $('#txtFechaFin').val(),
        RHNomMostrar:$('#txtNombreEmpleado').val(),
        RHDescripcion:$('#txtDescripcion').val(),
        RHColor: $('#txtColor').val(),
        RHCodEmp: $('#txtCodigoEmpleado').val(),
    };

    console.log(NuevoEvento);

}
function EnviarInformacion(RHIdVacaciones,objEvento) {

    $.ajax({

        type:'POST',
        url:'./api/Vacaciones.php?RHIdVacaciones='+RHIdVacaciones,
        data:objEvento,
        success:function (msg) {

            if (msg) {
                alert("Datos ingresados correctamente");
                $('#RRHH2').fullCalendar('refetchEvents');
                $("#ModalEventos").modal('toggle');

            }
        },
        error:function(){
            Swal.fire(
                'Listo!',
            );
        }
    });
}




function ModificarInformacion(RHIdVacaciones,objEvento) {



    $.ajax({

        type:'UPDATE',
        url:'./api/Vacaciones.php?RHIdVacaciones='+RHIdVacaciones,
        data: objEvento,
        success:function (msg) {
            if (msg) {
                alert("Datos ingresados correctamente");
                $('#RRHH2').fullCalendar('refetchEvents');

                $("#ModalEventos").modal('toggle');
            }
        },
        error:function(){
            alert("hay un error...");
        }
    });
   /* $.ajax(
        {
            type:'PUT',
            url:'./api/Vacaciones.php?RHIdVacaciones='+RHIdVacaciones +'&RHFechaInicio='+ RHFechaInicio +'&RHFechaFin=' + RHFechaFin +'&RHNomMostrar=' + RHNomMostrar + '&RHDescripcion='
                + RHDescripcion + '&RHColor=' + RHColor + '&RHCodEmp=' + RHCodEmp,



            success:function (msg){
                if (msg) {
                    alert("datos ingresados correctamente");
                }
            },
            error:function(){
                alert("...");
            }
        }
    );*/





}

function SelecCodEmpleado() {
    $.ajax({
        url: './api/Empleados.php',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            $(json).each(function (index, item) {
                RHNomEmp = json[index].RHNomEmp;
                RHCodEmp = json[index].RHCodEmp;
                $('#SelCodEmpleado').append('<option>(' + RHCodEmp + ') ' + RHNomEmp + ' </option>');
            })
            //se actualiza combo para que aparezcan nuevos valores cargados
            $("#SelCodEmpleado").selectpicker("refresh");
        },
        error: function (data) {
            alert("No se lograron cargar los datos(Empleado)" + data);
        }
    })
}

$(document).ready(function () {


    //se quita de onclick para que cargue los dbo luego de haber iniciado la pagina


    $('#SelCodEmpleado').change(function(){

        $('#txtCodigoEmpleado').val($('#SelCodEmpleado').val());


        var empleadocodigo = '#SelCodEmpleado';


        var init = $(empleadocodigo).val().indexOf('(');
        var fin = $(empleadocodigo).val().indexOf(')');
        var RHCodEmp = $(empleadocodigo).val().substr(init+1,fin-init-1);

        /*obtener nombre*/
        var RHNomEmp = $(empleadocodigo).val().substr($(empleadocodigo).val().indexOf(')')+1, $(empleadocodigo).val().length);

        /*setear*/



        $('#txtCodigoEmpleado').val(RHCodEmp);

        $('#txtNombreEmpleado').val(RHNomEmp);


    });

    //se crea objeto selectpicker
    $('#SelCodEmpleado').selectpicker();
    //se carga combo
    SelecCodEmpleado();
});