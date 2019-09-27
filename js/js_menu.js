
function fnOpenForm(evt, formname) {
	
	//validar si existe usuario
	//sino redirigir a index
	if (sessionStorage.getItem('Usuario') == null){
		window.location.replace("../index.html");
	}
	
	
	
    $("#content").hide();

    console.log(("Nombre del Formulario: ").concat(formname));
    var i, x, tablinks;
    tablinks = document.getElementsByClassName("tablink");

    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    //evt.currentTarget.className += " active";


    //$("#content").fadeOut();
    $("#content").empty();
    $("#content").load( '../frontend/'+formname + '.php');
    $("#content").fadeIn();

}



function myDropFunc(elemento) {
    var x = document.getElementById(elemento);

    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-indigo";

    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-indigo", "");
    }
}


$( "#btn_cerrar_sesion" ).click(function() {
 
 //alerta
 Swal.fire(
  'Cerrando Sesion..',
  'Vuelva pronto',
  'info'
);
debugger;
//se borran variables de session
	sessionStorage.clear();

	// redirigir index
	
	window.location.replace("../index.html");
 
});

