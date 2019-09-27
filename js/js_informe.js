
$(document).ready(function() {

} );

function mostrarInforme(){

    var fechaI = $('#min').val();
    var fechaF = $('#max').val();


    $('#tbInforme thead tr').clone(true).appendTo( '#tbInforme thead' );



    $('#tbInforme thead tr:eq(1) th').each( function (i) {

        var title = $(this).text();

        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search(this.value  )
                    .draw();
            }
        } );


    } );




    $('.datepicker').datepicker();//para los calendarios


    debugger;

$('#tbInforme').DataTable( {

    destroy: true,
    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSearch": ""  },//busca un dato exacto
    dom: 'Blfrtip',
    buttons: [
        'print', 'pdf'
    ],
/*
    "ajax": "./api/Informe.php?fechaI=2019-08-01&fechaF=2019-08-31",
    "method": "GET",
    "columns": [

        { "data": "NuevoId" },
        { "data": "Nombre" },
        { "data": "ENTRADA" },
        { "data": "SALIDA"}
    ]*/

} ).destroy();

 $('#tbInforme').DataTable({

"ajax": {
    "method": "GET",
    "url": "./api/Informe.php?fechaI='"+fechaI+"'"+"&fechaF='"+fechaF+"'"

      },
      'columns':[
          { "data": "NuevoId" },
          { "data": "Nombre" },
          { "data": "ENTRADA" },
          { "data": "SALIDA"}
      ]

    });

/*
 ajax({
        url: "./api/Informe.php",
        type: "get", //send it through get method
        data: {
            fechaI: fechaI,
            fechaF: fechaF,
            NuevoId: NuevoId,
            Nombre: Nombre,
            ENTRADA: ENTRADA,
            SALIDA: SALIDA,

            success: function(response) {
                //Do Something
            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });*/



    var table = $('#tbInforme').DataTable( );

    debugger;


    $('#min, #max').change( function() {
        table.draw();
    } );

    /*funcion para comparar fechas*/
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            /*inicializacion de variables con fechas minimas y maximas*/
            var min =  new Date($('#min').val());
            var max =  new Date($('#max').val());
           // var fecha = new Date (data[1]) ; // 1 es la columna de fecha la que se usa para filtrar
            /*validaciones para cambiar fecha */
            if ( ( isNaN( min ) && isNaN( max ) ) ||
                ( isNaN( min ) && fecha <= max ) ||
                ( min <= fecha   && isNaN( max )  ) ||
                ( min <= fecha   && fecha <= max )
            )
            {
                return true;
            }
            return false;
        }
    );

};








