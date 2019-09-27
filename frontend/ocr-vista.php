<html>
    <head>
	<!--tesseract https://codepen.io/jyloo/pen/GOPVaO-->
	    <script src='https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js'></script>
<!--jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>    
      
	  <!--bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>

    <div class="row" style="padding: 5%;background-color: #8fd8d2">
	<div class="col-md-12">
      <div class="card-deck">
      <div class="card">
           <h5 class="card-header"><img src="https://img.icons8.com/cotton/64/000000/compact-camera.png"> Imagen a analizar</h5>
          <div class="content">
            <img id="image" class="img-fluid" src=""/>
          </div>
          <div class="card-footer">
		  
            

		<span class="btn btn-primary btn-file">
			Seleccionar Archivo <input id="file" type="file" onchange="proccess(window.lastFile=this.files[0])" style="position: absolute;
			top: 0;
			right: 0;
			min-width: 100%;
			min-height: 100%;
			font-size: 100px;
			text-align: right;
			filter: alpha(opacity=0);
			opacity: 0;
			outline: none;   
			cursor: inherit;
			display: block;"> 
		</span>			
			
          </div>
		 
      </div>
        
      <div class="card">
	  
			<h5 class="card-header"><img src="https://img.icons8.com/cotton/64/000000/happy-file.png"> Salida Texto</h5>
			  <div class="desc">Obtener texto de imagen utilizando libreria tesseract OCR.</div>
          <div class="card-body">
		  <div id="contendios"></div>
          <div class="content content-result">
            <div class='ui grid'>
              <div class='row result'>
                <div class="column placeholder">
				
                  <h3>Sin datos, debe elegir imagen</h3>
				  
                </div>
              </div>
            </div>  
          </div>
		  </div>
      </div>
      </div>
	  </div>
    </div>



        <script>

/**
* funcion principal
*/
function proccess(file){
  $(".result").html("");
  
  //Preview Image
  var src = (window.URL ? URL : webkitURL).createObjectURL(file);
  $("#image").attr("src", src);
  
  //Proccess Image
  Tesseract.recognize(file)
  .progress(function(data){
    console.log(data);
    progress(data);
  })
  .then(function(data){
    console.log(data);
    result(data)
  })
  
}

/**
* mostrar progreso
*/
function progress(packet){
  var r = $(".result");
  
  if(r.length > 0 && r.find(".status").last().html() == packet.status){
    if('progress' in packet) {
      r.find("progress").last().val(packet.progress);
    }
    
  } else {    
    
	var tStatus = "<div class='status'>" + packet.status +"</div>";
    var tProgress = "<div class=''>" + (typeof packet.progress == "undefined" ? "" : ("<progress value='" + packet.progress + "' max='1'>")) +"</div>";


    r.append("<br /><br />"+tStatus + tProgress);
  }
}

/**
* report
*/
function result(data){
  var r = $(".result");
  r.append(
    "<div class='card-footer'>" +
    "<div class='alert alert-primary'>" + data.text +"</div><br>" + 
    "</div>"
  );
  
}
    </script>
</html>