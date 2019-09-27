




<div class="jumbotron  jumbotron-fluid" style="background-color: #8fd8d2;">
    <div class="container">
        <h1 class="display-4">FLUJOS</h1>
    </div>


    <div class="row">
        <div class="col-10">

            <span class="float-right">

                    <button type="button" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" data-toggle="modal" data-target="#DatosFlujo">NUEVO FLUJO
                     <i class="fas fa-tasks"></i>
                    </button>
                </span>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-8 offset-md-2" >
            <table id="example" class="table table-sm table-hover w3-border align-" style="width: 99%">
                <thead class="primary-color text-white">
                <tr>
                    <th class="">FLUJOS</th>

                </tr>
                </thead>
                <tfoot>
                <tr class="primary-color text-white">

                    <th class="">FLUJOS</th>

                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>



<div class="modal fade " id="DatosFlujo" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable modal-lg " role="document">

        <div class="welcome ">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title text-center   " >CREAR NUEVO FLUJO</h5>
                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close" onclick="$('#DatosFlujo').fadeOut();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body ">
                    <form id="datosFlujo" >

                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-0">
                                    <div class="input-group-prepend">
                                        <span class="md-addon" style="color: #00b0ff" id="Flujo">Nombre del Flujo </span>
                                    </div>
                                    <input type="text" class="form-control" id="txtFlujo" name="txtFlujo" >
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="col">
                                <div class="md-form mt-0">
                                    <div class="input-group-prepend">
                                        <span class="md-addon" style="color: #00b0ff" id="Proceso">Proceso</span>
                                    </div>
                                    <select id="selProceso"  class="form-control"  >
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
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







<script src="../js/js_tipoflujo.js" type="text/javascript"></script>
