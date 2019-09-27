$(document).ready(function () {

    mostrarCalendario();

});


function mostrarCalendario(){
    var arreglado;

    var dataSuspensiones = $.ajax({
        url: './api/Suspensiones.php',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data;

            arreglado = json.data.map ( item=> {
                return { id: item.RHIdSuspension,
                    descripcion: item.RHDescripcion,
                    codEmpleado: item.RHCodEmp,
                    title: item.RHNomMostrar,
                    motivo: item.RHMotivo,
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


    $.when(dataSuspensiones).done(function (){

        $('#RRHH2').fullCalendar({
            header: {
                left: 'today,prev,next',
                center: 'title',
                right: 'month,basicWeek, basicDay, Mibotton'
            },

            viewRender: function(view, element) {
                $('.fc-center')[0].children[0].innerText = view.title.replace(new RegExp("undefined", 'g'), "");
            },

            dayClick: function (date, jsEvent, view) {

                $('#txtFechaInicio').val(date.format());

                $("#ModalEventos").modal();
            },

            events: arreglado,




            eventClick: function (calEvent, jsEvent, view) {
                $('#idSuspensiones').val(calEvent.id)
                $('#txtCodigoEmpleado').val(calEvent.codEmpleado);
                FechaInicio= calEvent.start._i.split (" ");
                FechaFin= calEvent.end._i.split (" ");
                $('#txtFechaInicio').val(FechaInicio[0]);
                $('#txtFechaFin').val(FechaFin[0]);
                $('#txtNombreEmpleado').val(calEvent.title);
                $('#txtMotivo').val(calEvent.motivo);
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


};



function btnEliminar(RHIdSuspension) {
    $.ajax(
        {
            type:'DELETE',
            url:'./api/Suspensiones.php?RHIdSuspension='+RHIdSuspension,
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
    EnviarInformacion('modificar',NuevoEvento);
    console.log("btnModificar");

    $('#RRHH2').fullCalendar('renderEvent', NuevoEvento);

};

function RecolectarDatosGUI() {
    NuevoEvento = {
        RHIdSuspension: $('#idSuspensiones').val(),
        RHFechaInicio: $('#txtFechaInicio').val(),
        RHFechaFin: $('#txtFechaFin').val(),
        RHNomMostrar:$('#txtNombreEmpleado').val(),
        RHMotivo:$('#txtMotivo').val(),
        RHDescripcion:$('#txtDescripcion').val(),
        RHColor: $('#txtColor').val(),
        RHCodEmp: $('#txtCodigoEmpleado').val(),
    };

    console.log(NuevoEvento);

}
function EnviarInformacion(RHIdSuspension,objEvento) {

    $.ajax({
        type:'POST',
        url:'./api/Suspensiones.php?RHIdSuspension='+RHIdSuspension,
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
}debugger;

$(document).ready(function () {


    //se quita de onclick para que cargue los dbo luego de haber iniciado la pagina


    $('#SelCodEmpleado').change(function(){

        $('#txtCodigoEmpleado').val($('#SelCodEmpleado').val());


        var empleadocodigo = '#SelCodEmpleado';

        debugger;
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