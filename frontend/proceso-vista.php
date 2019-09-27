<div class="jumbotron  jumbotron-fluid" style="background-color: #8fd8d2;">
    <div class="container">
        <h1 class="display-4">PROCESOS</h1>
    </div>


    <div class="row">
        <div class="col-10">

            <span class="float-right">

                    <button type="button" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" data-toggle="modal" data-target="#DatosProceso">NUEVO PROCESO
                     <i class="fas fa-tasks"></i>
                    </button>
                </span>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-8 offset-md-2" >
            <table id="TablaProcesos" class="table table-sm table-hover w3-border align-" style="width: 99%">
                <thead class="primary-color text-white">
                <tr>
                    <th class="">ID PROCESO</th>
                    <th class="">NOMBRE DEL PROCESO</th>

                </tr>
                </thead>
                <tfoot>
                <tr class="primary-color text-white">

                    <th class="">ID PROCESO</th>
                    <th class="">NOMBRE DEL PROCESO</th>

                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>



<div class="modal fadeIn " id="DatosProceso" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable modal-lg " role="document">

        <div class="welcome ">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title text-center   " >CREAR NUEVO PROCESO</h5>
                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close" onclick="$('#DatosProceso').fadeOut();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body ">
                    <form id="datosProceso" >

                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-0">
                                    <div class="input-group-prepend">
                                        <span class="md-addon" style="color: #00b0ff" id="NombreProceso">Nombre del Proceso  </span>
                                    </div>
                                    <input type="text" class="form-control" id="txtProceso" name="txtProceso" >
                                </div>
                            </div>
                        </div>


                        <div class="">
                            <div class="col">
                                <div class="md-form mt-0">
                                    <div class="input-group-prepend">
                                        <span class="md-addon" style="color: #00b0ff" id="TipoOficina">Oficina</span>
                                    </div>
                                    <select id="selTipoOficina"  class="form-control"  >
                                    </select>
                                </div>
                            </div>
                        </div>






                <br>
                <br>
                <div class="">
                    <button type="button" class="btn btn-primary" onclick="EnviarInformacion()"   >GUARDAR</button>
                    <button type="button" class="btn btn-primary" onclick="ModificarInformacion($('#txtCodigo').val())" >MODIFICAR</button>
                    <button type="button" class="btn btn-primary" onclick="Eliminar($('#txtCodigo').val())" >ELIMINAR</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#IngresoDatos').fadeOut();" id="btn_cerrar_proc">CERRAR</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

</div>

<script src="../js/js_proceso.js" type="text/javascript"></script>


