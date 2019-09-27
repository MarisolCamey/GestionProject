$(document).ready(function() {

});


function mostrarReporte(){

    var fechaI = $('#min').val();
    var fechaF = $('#max').val();

    $('#tbReportes thead tr').clone(true).appendTo( '#tbReportes thead' );



    $('#tbReportes thead tr:eq(1) th').each( function (i) {

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

    $('#tbReportes').DataTable( {

        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
            'print', 'pdf'
        ],

        "ajax": "./api/Reportes.php?fechaI='"+fechaI+"'"+"&fechaF='"+fechaF+"'",
        "columns": [

            { "data": "NuevoId" },
            { "data": "fecha" },
            { "data": "Entrada" },
           // { "data": "SalidaAlmuerzo" }
            // { "data": "EntradaAlmuerzo" },
            { "data": "Salida"},
            { "data": "Nombre" },


        ],
        fnRowCallback: function(row, data,iDisplayIndex, iDisplayIndexFull ) {

            debugger;

            var entrada = {columna_id:2,texto:data.Entrada};
            //var entradaalmuerzo = {columna_id:4,texto:data.EntradaAlmuerzo};
            var salida = {columna_id:3,texto:data.Salida};// columna_id:5, si se dejaran las 4 columnas
            //var salidaalmuerzo = {columna_id:3,texto:data.SalidaAlmuerzo};

            var horarios = [];

            horarios.push(entrada);
           // horarios.push(entradaalmuerzo);
            horarios.push(salida);
            //horarios.push(salidaalmuerzo);



            $.each( horarios, function( key, datos ) {


                var valor;

                debugger;
                // if (data[i].match(/.*Entró.*tarde.*/))
                if (/Entró.*tarde/gm.test(datos.texto))
                {
                    //si cumple la condicion coloca el texto
                    valor = 'Entro Tarde';
                }
                else if(/Salió.*tarde/gm.test(datos.texto)){

                    valor = 'Salio tarde';
                }
                else if(/.*Entró.*antes/gm.test(datos.texto)){

                    valor = 'Entro antes';
                }

                else if(/.*Salió.*antes/gm.test(datos.texto)){

                    valor = 'Salio antes';
                }
                else{
                    //sino setea el valor
                    valor = datos.texto;
                }




                switch (valor) {
                    //si es normal
                    case 'Entrada Normal':
                        //cambia color y fondo
                        //reemplazo el valor de eq por i
                        //i al ser una variable se concatena dentro, no solo se coloca
                        $(row).find('td:eq('+datos.columna_id+')', row).css("color", "white");
                        $(row).find('td:eq('+datos.columna_id+')', row).css("background-color", "#32CD32");
                        break;
                    case 'Entro Tarde':
                        //valor seteado previamente
                        $(row).find('td:eq('+datos.columna_id+')', row).css("color", "white");
                        $(row).find('td:eq('+datos.columna_id+')', row).css("background-color", "#f63324");
                        break;
                    case 'Entro antes':
                        //valor seteado previamente
                        $(row).find('td:eq('+datos.columna_id+')', row).css("color", "white");
                        $(row).find('td:eq('+datos.columna_id+')', row).css("background-color", "#00e676");
                        break;
                    case 'Salio antes':
                        //valor seteado previamente
                        $(row).find('td:eq('+datos.columna_id+')', row).css("color", "white");
                        $(row).find('td:eq('+datos.columna_id+')', row).css("background-color", "#FF6347");
                        break;
                    case 'Salio tarde':
                        //valor seteado previamente
                        $(row).find('td:eq('+datos.columna_id+')', row).css("color", "white");
                        $(row).find('td:eq('+datos.columna_id+')', row).css("background-color", "#1AB5B8");
                        break;


                    default:
                        //valor por default
                        //$(row).find('td:eq('+i+')', row).css("color", "white");
                        $(row).find('td:eq('+datos.columna_id+')', row).css("color", "#1e87d4");
                        break;
                }

            });




        }

    });


    var table = $('#tbReportes').DataTable( );




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


