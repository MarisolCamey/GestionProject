<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestión Documentos</title>
	<link rel="icon"       type="image/png"       href="https://img.icons8.com/cotton/64/000000/open-document.png">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <!--css de datatable-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.css"/>

    <!--css de botones de descarga-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"/>

    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>


    <!--popper es un complemento para que selectpicker sea compatible con bootstrap v4-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">


    <!--datatables y datepicker-->

    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" integrity="sha256-bLNUHzSMEvxBhoysBE7EXYlIrmo7+n7F4oJra1IgOaM=" crossorigin="anonymous" />



    <!--js de datatable-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
    <!--js de librerias de exportacion (necesarias para exportar a diferentes formatos)-->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type=" https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js" ></script>


    <!-- Latest compiled and minified CSS selectpicker -->

    <!-- Latest compiled and minified JavaScript selectpicker-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js" integrity="sha256-JIBDRWRB0n67sjMusTy4xZ9L09V8BINF0nd/UUUOi48=" crossorigin="anonymous"></script>



    <!--js de sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	
	
	<!--jquill librerias editor docs-->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

</head>
<body style="background-color:#8fd8d2">

<nav class="navbar navbar-light" style= "background-image: url(../images/ofi8.jpg);">
    <!-- Navbar content -->
    <div class="dropdown">
        <button type="button" class=" btn btn-danger dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-caret-square-down"></i> MENÚ
        </button>
        <div class="dropdown-menu">

            <button class="dropdown-item" type="button" onclick=" fnOpenForm(event,'principal-vista')"><i class="fas fa-home"></i> PÁGINA PRINCIPAL</button>
            <h5 class="dropdown-header">INGRESO DE INFORMACIÓN</h5>
            <button class="dropdown-item" type="button" onclick=" fnOpenForm(event,'rol-vista')"><i class="fas fa-clipboard-check"></i> Roles</button>
            <button class="dropdown-item" type="button" onclick=" fnOpenForm(event,'usuario-vista')"><i class="fas fa-users"></i> Usuarios</button>
            <button class="dropdown-item" type="button" onclick=" fnOpenForm(event,'oficina-vista')"><i class="fas fa-mail-bulk"></i> Oficinas</button>
            <button class="dropdown-item" type="button" onclick=" fnOpenForm(event,'proceso-vista')"><i class="fas fa-briefcase"></i> Proceso</button>
            <button class="dropdown-item" type="button" onclick=" fnOpenForm(event,'tipoflujo-vista')"><i class="fas fa-map-signs"></i> Flujo</button>
            <h5 class="dropdown-header">DOCUMENTOS</h5>
            <button class="dropdown-item" type="button" onclick=" fnOpenForm(event,'editor-vista')"><i class="far fa-file"></i> Editor Online</button>
            <h5 class="dropdown-header">UTILIDADES</h5>
            <button class="dropdown-item" type="button" onclick=" fnOpenForm(event,'ocr-vista')"><i class="fas fa-camera"></i> Lector OCR</button>
			<h5 class="dropdown-header">Acerca de...</h5>
			<button class="dropdown-item" type="button" onclick="window.open('../frontend/documentacion-vista.php', '_blank');"><i class="fab fa-github"></i> Ver Documentación</button>
        </div>
    </div>
    <form class="form-inline">

      
        <button class="btn btn-danger mr-2 my-sm-0" type="submit" id = "btn_cerrar_sesion">Cerrar Sesión <i class="fas fa-window-close"></i></button>

    </form>
</nav>



<div id="content"></div>

<script src="../js/js_menu.js" type="text/javascript"></script>

<script type="text/javascript">
    fnOpenForm(event, './principal-vista');

</script>


</body>
</html>