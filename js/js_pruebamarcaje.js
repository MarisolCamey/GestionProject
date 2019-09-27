$(document).ready(function() {


});


function mostrarTabla() {


    /*$('#tbReportes thead tr').clone(true).appendTo( '#tbReportes thead' );
    $('#tbReportes thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );

        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );*/



    $('.datepicker').datepicker();//para los calendarios

    $('#tbReportes').DataTable( {

        //funcion para cambiar color en filas
        "createdRow": function( row, data, dataIndex ) {
            if ( data[0] == 209 ) {
                $(row).find ("th" [0]).css( "background-color","#E60026" );
            }
        },


        //funcion para buscar datos exactos
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
            'print', 'pdf'
        ],

        "ajax": "./api/Reportes.php",
        "columns": [
            { "data": "userid" },
            { "data": "fecha" },
            { "data": "horaEntrada" },
            { "data": "horaSalidaAlmuerzo" },
            { "data": "horaEntradaAlmuerzo" },
            { "data": "horaSalida"}

        ],
        orderCellsTop: true,
        fixedHeader: true}

    );



    setInterval(function () {
        table.ajax.reload(null, false);
    }, 10000);




    var table = $('#tbReportes').DataTable();
    $('#min, #max').change( function() {
        table.draw();
    } );

    /*funcion para comparar fechas*/
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            /*inicializacion de variables con fechas minimas y maximas*/
            var min =  new Date($('#min').val());
            var max =  new Date($('#max').val());
            var fecha = new Date (data[1]) ; // 1 es la columna de fecha la que se usa para filtrar
            /*validaciones para cambiar fecha */
            if ( ( isNaN( min ) && isNaN( max ) ) ||
                ( isNaN( min ) && fecha <= max ) ||
                ( min <= fecha   && isNaN( max ) ) ||
                ( min <= fecha   && fecha <= max ) )
            {
                return true;
            }
            return false;
        }
    );


}

