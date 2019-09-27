$('#btnEntrar').on('click', function () {
	
	//se borran variables de session
	sessionStorage.clear();
	
	debugger;
    var pdata = {
        "Email": $('#inputEmail').val(),
        "Contra": $('#inputPassword').val()

    };




    $.ajax({
        data: pdata,
        url: './public/api/Login',
        type: 'POST',
        beforeSend: function () {
            $('#response').html("<div class=\"spinner-grow text-primary\" role=\"status\">\n" +
                "  <span class=\"sr-only\">Loading...</span>\n" +
                "</div>");
        },

        success: function (data) {
            if(data.toString()=='error'){
                alert('Usuario o Pass Incorrecto');
                return
            }
            if(!data[0]['IdUsuario']){
                alert('Usuario o Pass Incorrecto');
            }


            if(data[0]['IdUsuario'] * 1 <= 0){
                alert('Usuario o Pass Incorrecto');

            }

            var Usuario=(data[0]['IdUsuario']);
            var Compania=(data[0]['IdCompany']);

            sessionStorage.setItem('Usuario', Usuario);
            sessionStorage.setItem('Compania', Compania);

            window.location.href = "./frontend/principal.php";
        },


        error: function (request) {

            $('#response').html(request.responseText);
        }
    });
});

function fnTipoAlerta(codalerta) {
    if (codalerta == 1)
        return "<div id='alert' class='alert alert-success alert-dismissible fade show' role='alert'>";
    if (codalerta == 0)
        return "<div id='alert' class='alert alert-danger alert-dismissible fade show' role='alert'>";
    if (codalerta == 2)
        return "<div id='alert' class='alert alert-warning alert-dismissible fade show' role='alert'>";
    if (codalerta == 3)
        return "<div id='alert' class='alert alert-info alert-dismissible fade show' role='alert'>";

    return "<div class='alert alert-dark alert-dismissible fade show' role='alert'>";
}

