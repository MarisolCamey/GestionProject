


<div class="jumbotron  jumbotron-fluid" style="background-color: #8fd8d2;">
    <div class="container">
        <h1 class="display-4">OFICINAS</h1>


    </div>


    <div class="row">
        <div class="col-10">

            <span class="float-right">
                <button type="button" class="btn btn-primary btn-lg active " role="button" aria-pressed="true" data-toggle="modal" data-target="#DatosOficina">AGREGAR OFICINA
                    <i class="fas fa-calendar-alt"></i></button>
                    <button type="button" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" data-toggle="modal" data-target="#DatosResponsable">AGREGAR RESPONSABLE
                        <i class="fas fa-user-check"></i>
                    </button>
                </span>

        </div>

    </div>
<br>
    <br>
    <div class="row">
        <div class="col-sm-8 offset-md-2">
            <table id="example" class="table table-sm table-hover w3-border" style="width: 99%">
                <thead class="primary-color text-white">
                <tr>
                    <th class="">OFICINA</th>
                    <th class="">RESPONSABLE</th>
                    <th class="">Pusto Funcional</th>
                    <th class="">Puesto Nominal</th>
                </tr>
                </thead>
                <tfoot>
                <tr class="primary-color text-white">

                    <th class="">OFICINA</th>
                    <th class="">RESPONSABLE</th>
                    <th class="">Pusto Funcional</th>
                    <th class="">Puesto Nominal</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div class="modal fade " id="DatosOficina" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable modal-lg " role="document">

        <div class="welcome ">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title text-center " >DATOS DE LA OFICINA</h5>
                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close" onclick="$('#DatosOficina').fadeOut();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body ">
                    <form id="datosOficina" >

                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-0">
                                    <div class="input-group-prepend">
                                        <span class="md-addon" style="color: #00b0ff" id="NombreOf">Nombre de la Oficina </span>
                                    </div>
                                    <input type="text" class="form-control" id="txtNombreOf" name="txtNombreOf" >
                                </div>
                            </div>

                            <div class="col">
                                <div class="md-form mt-0">
                                    <div class="input-group-prepend">
                                        <span class="md-addon" style="color: #00b0ff" id="Departamento">Departamento </span>
                                    </div>
                                    <input type="text" class="form-control" id="txtDepartamento" name="txtDepartamento">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-0 form-group mt-0" >
                                    <div class="input-group-prepend">
                                        <span class="md-addon" style="color: #00b0ff" id="Correo">Correo </span>
                                    </div>
                                    <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" >
                                </div>
                            </div>

                            <div class="col">
                                <div class="md-form mt-0">
                                    <div class="input-group-prepend">
                                        <span class="md-addon" style="color: #00b0ff" id="Telefono">Telefono </span>
                                    </div>
                                    <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" >
                                </div>
                            </div>
                        </div>

<br>
                        <br>
                        <div class="">
                            <button type="button" class="btn btn-primary" onclick="EnviarInformacion1()"   >GUARDAR</button>
                            <button type="button" class="btn btn-primary" onclick="ModificarInformacion($('#txtCodigo').val())" >MODIFICAR</button>
                            <button type="button" class="btn btn-primary" onclick="Eliminar($('#txtCodigo').val())" >ELIMINAR</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#IngresoDatos').fadeOut();"id="btn_cerrar_proc">CERRAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade " id="DatosResponsable" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable modal-lg " role="document">

        <div class="welcome ">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title text-center   " >DATOS DEL RESPONSABLE DE OFICINA</h5>
                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close" onclick="$('#DatosResponsable').fadeOut();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body ">
                    <form id="datosResponsable" >

                        <div class="row">
                            <div class="">
                                <div class="col">
                                    <div class="md-form mt-0">
                                        <div class="input-group-prepend">
                                            <span class="md-addon" style="color: #00b0ff" id="Usuario">Usuario</span>
                                        </div>
                                        <select id="selUsuario"  class="form-control"  >
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col">
                                <div class="md-form mt-0">
                                    <div class="input-group-prepend">
                                        <span class="md-addon" style="color: #00b0ff" id="Cargo">Cargo </span>
                                    </div>
                                    <input type="text" class="form-control" id="txtCargo" name="txtCargo">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="">
                                <div class="col">
                                    <div class="md-form mt-0">
                                        <div class="input-group-prepend">
                                            <span class="md-addon" style="color: #00b0ff" id="Oficina">Oficina</span>
                                        </div>
                                        <select id="selOficina"  class="form-control"  >
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="">
                            <button type="button" class="btn btn-primary" onclick="EnviarInformacion2()"   >GUARDAR</button>
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







<script src="../js/js_oficina.js" type="text/javascript"></script>
