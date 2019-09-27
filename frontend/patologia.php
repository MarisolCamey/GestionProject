






    <div class="row">
        <div class="col-10">
            <span class="float-right">
                    <button type="button" class="btn btn-secondary btn-lg active" role="button"
                            aria-pressed="true" data-toggle="modal" data-target="#modalPatologia">PATOLOGÍA
                     <i class="fas fa-tasks"></i>
                    </button>
                </span>
            <div class="col-10">
            <span class="float-right">
                    <button type="button" class="btn btn-secondary btn-lg active" role="button"
                            aria-pressed="true" data-toggle="modal" data-target="#modalCitologia">CITOLOGÍA
                     <i class="fas fa-tasks"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <br>
    <br>

</div>



<div class="modal fade " id="modalPatologia" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable modal-lg " role="document">




    <!-- inicio formulario patologia -->
    <div class="w3-modal" id="modalPatologia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">PATOLOGIA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="$('#modalPatologia').fadeOut();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputPatologia"> No.Patología</label>
                            </div>
                            <input type="text" class="form-control" id="inputPatologia"
                                   placeholder="Ingrese No. Patología">
                        </div>
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputFechaIngresoP">Fecha Ingreso</label>
                            </div>
                            <input type="date" class="form-control" id="inputFechaIngresoP"
                                   placeholder="Ingrese Fecha Ingreso">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNombrePacienteP">Nombre de Paciente</label>
                            </div>
                            <input type="text" class="form-control" id="inputNombrePacienteP" placeholder="Ingrese Nombre del Paciente">
                        </div>
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputEdadP">Edad</label>
                            </div>
                            <input type="text" class="form-control" id="inputEdadP" placeholder="Ingrese Edad">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGeneroP">Género</label>
                            </div>
                            <select class="custom-select" id="inputGeneroP">
                                <option value="MP">MASCULINO</option>
                                <option value="FP">FEMENINO</option>
                            </select>
                        </div>
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputHistoriaClinicaP">No. Historia Clínica</label>
                            </div>
                            <input type="text" class="form-control" id="inputHistoriaClinicaP" placeholder="Ingrese No. de Historia Clínica">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputServicioP">Servicio</label>
                            </div>
                            <input type="text" class="form-control" id="inputServicioP"
                                   placeholder="Ingrese Servicio">
                        </div>
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputCamaP">No. de Cama</label>
                            </div>
                            <input type="text" class="form-control" id="inputCamaP"
                                   placeholder="Ingrese No. de Cama">
                        </div>
                    </div>

                    <div class="row">

                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputProcedimientoP">Procedimiento</label>
                            </div>
                            <select class="custom-select" id="inputProcedimientoP" onchange="fn_ShowHideProcedimiento();">
                                <option value="BiIncisional"> Biopsia Incisional</option>
                                <option value="BiExcisional">Biopsia Excisional</option>
                                <option value="BiTumorial">Resección Tumorial</option>
                            </select>
                        </div>

                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputPiezaP">Pieza</label>
                            </div>
                            <input type="text" class="form-control" id="inputPiezaP"
                                   placeholder="Ingrese Pieza">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputLocalizacionAP">Localización Anatómica</label>
                            </div>
                            <input type="text" class="form-control" id="inputLocalizacionAP"
                                   placeholder="Ingrese localización anatómica">
                        </div>
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputMedicoSolicitanteP">Médico que solicita estudio</label>
                            </div>
                            <input type="text" class="form-control" id="inputMedicoSolicitanteP"
                                   placeholder="Ingrese Médico solicitante">
                        </div>
                    </div>


                    <div class="row">

                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputPatologiaAnteriorP">Tiene Patología anterior</label>
                            </div>
                            <select class="custom-select" id="inputPatologiaAnteriorP" onchange="fn_ShowHidePatologiaAnterior();">
                                <option value="S"> SI</option>
                                <option value="N">NO </option>

                            </select>
                        </div>

                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNoPatologiaAntP">No. Patología anterior</label>
                            </div>
                            <input type="text" class="form-control" id="inputNoPatologiaAntP"
                                   placeholder="Ingrese No. de Patología Anterior">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNoBloquesP"> No. de Bloques</label>
                            </div>
                            <input type="text" class="form-control" id="inputNoBloquesP"
                                   placeholder="Ingrese No. de Bloques">
                        </div>
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNoLaminillasP">No. de Laminillas</label>
                            </div>
                            <input type="text" class="form-control" id="inputNoLaminillasP"
                                   placeholder="Ingrese No. de Laminillas">
                        </div>
                    </div>

                    <div class="row">

                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputTincionesP">Tinciones Empleadas</label>
                            </div>
                            <select class="custom-select" id="inputTincionesP" onchange="fn_ShowHideTinciones();">
                                <option value="HyEP"> HyE</option>
                                <option value="PapanicolauP">Papanicolau </option>
                                <option value="PASP">PAS </option>
                                <option value="GiemsaP">Giemsa </option>
                                <option value="TricromicoP">Tricromico de Masson </option>
                                <option value="TBP">TB color modificado </option>
                                <option value="PlataP">Plata </option>
                                <option value="GMSP">GMS </option>
                            </select>
                        </div>

                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="PinputFechaInformeF"> Fecha de Informe Final</label>
                            </div>
                            <input type="date" class="form-control" id="PinputFechaInformeF"
                                   placeholder="Fecha informe final">
                        </div>

                    </div>


                    <div class="form-group">
                        <label class="input-group-text" for="PinputNoDiagnosticoF">Diagnóstico Final:</label>
                        <textarea class="form-control" rows="5" id="PinputNoDiagnosticoF"></textarea>
                    </div>


                </div><!-- modal -->
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary" onclick="GuardarPaciente()" id="btnGuardarPacienteP">GUARDAR</button>

                </div>
            </div>
        </div>
    </div>
    <!-- fin formulario PATOLOGIA -->

</div>
</div>





<div class="modal fade " id="modalCitologia" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable modal-lg " role="document">

        <!-- inicio formulario CITOLOGÍA -->
        <div class="w3-modal" id="modalCitologia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">CITOLOGÍA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                onclick="$('#modalPatologia').fadeOut();">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputCitologia"> No. Citología</label>
                                </div>
                                <input type="text" class="form-control" id="CinputCitologia"
                                       placeholder="Ingrese No. Citología">
                            </div>
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputFechaIngreso">Fecha Ingreso</label>
                                </div>
                                <input type="date" class="form-control" id="CinputFechaIngreso"
                                       placeholder="Ingrese Fecha Ingreso">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputNombrePaciente">Nombre de Paciente</label>
                                </div>
                                <input type="text" class="form-control" id="CinputNombrePaciente" placeholder="Ingrese Nombre del Paciente">
                            </div>
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputEdad">Edad</label>
                                </div>
                                <input type="text" class="form-control" id="CinputEdad" placeholder="Ingrese Edad">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputGenero">Género</label>
                                </div>
                                <select class="custom-select" id="CinputGenero">
                                    <option value="M">MASCULINO</option>
                                    <option value="F">FEMENINO</option>
                                </select>
                            </div>
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputHistoriaClinica">No. Historia Clínica</label>
                                </div>
                                <input type="text" class="form-control" id="CinputHistoriaClinica" placeholder="Ingrese No. de Historia Clínica">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputServicio">Servicio</label>
                                </div>
                                <input type="text" class="form-control" id="CinputServicio"
                                       placeholder="Ingrese Servicio">
                            </div>
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputCama">No. de Cama</label>
                                </div>
                                <input type="text" class="form-control" id="CinputCama"
                                       placeholder="Ingrese No. de Cama">
                            </div>
                        </div>



                        <div class="row">
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputLocalizacionA">Localización Anatómica de la muestra</label>
                                </div>
                                <input type="text" class="form-control" id="CinputLocalizacionA"
                                       placeholder="Ingrese localización anatómica">
                            </div>

                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputTipoMuestra">Tipo de Muestra</label>
                                </div>
                                <select class="custom-select" id="CinputPatologiaAnterior" onchange="fn_ShowHideTipoMuestra();">
                                    <option value="CervicoVaginalC"> Cérvico-vaginal</option>
                                    <option value="PeritonealC">Peritoneal </option>
                                    <option value="LCRC">LCR </option>
                                    <option value="OrinaC">Orina </option>
                                    <option value="EsputoC">Esputo </option>
                                </select>
                            </div>

                        </div>


                        <div class="row">


                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputPatologiaAnterior">Tiene Citología anterior</label>
                                </div>
                                <select class="custom-select" id="CinputPatologiaAnterior" onchange="fn_ShowHidePatologiaAnterior();">
                                    <option value="S"> SI</option>
                                    <option value="N">NO </option>

                                </select>
                            </div>

                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputNoPatologiaAnt">No. Patología anterior</label>
                                </div>
                                <input type="text" class="form-control" id="CinputNoPatologiaAnt"
                                       placeholder="Ingrese No. de Patología Anterior">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputMedicoSolicitante">Médico que solicita estudio</label>
                                </div>
                                <input type="text" class="form-control" id="CinputMedicoSolicitante"
                                       placeholder="Ingrese Médico solicitante">
                            </div>
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputNoLaminillas">No. de Laminillas</label>
                                </div>
                                <input type="text" class="form-control" id="CinputNoLaminillas"
                                       placeholder="Ingrese No. de Laminillas">
                            </div>
                        </div>

                        <div class="row">

                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputTinciones">Tinciones Empleadas</label>
                                </div>
                                <select class="custom-select" id="inputTinciones" onchange="fn_ShowHideTinciones();">
                                    <option value="CHyE"> HyE</option>
                                    <option value="CPapanicolau">Papanicolau </option>
                                    <option value="CPAS">PAS </option>
                                    <option value="CGiemsa">Giemsa </option>
                                    <option value="CTricromico">Tricromico de Masson </option>
                                    <option value="CTB">TB color modificado </option>
                                    <option value="CPlata">Plata </option>
                                    <option value="CGMS">GMS </option>
                                </select>
                            </div>

                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CinputFechaInformeF"> Fecha de Informe Final</label>
                                </div>
                                <input type="date" class="form-control" id="CinputFechaInformeF"
                                       placeholder="Fecha informe final">
                            </div>

                        </div>


                        <div class="form-group">
                            <label class="input-group-text" for="CinputNoDiagnosticoF">Diagnóstico Final:</label>
                            <textarea class="form-control" rows="5" id="CinputNoDiagnosticoF"></textarea>
                        </div>


                    </div><!-- modal -->
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary" onclick="GuardarPaciente()" id="CbtnGuardarPaciente">GUARDAR</button>

                    </div>
                </div>
            </div>
        </div>
        <!-- fin formularioCITOLOGÍA -->
    </div>
</div>







<script src="./js/js_menu.js" type="text/javascript"></script>
