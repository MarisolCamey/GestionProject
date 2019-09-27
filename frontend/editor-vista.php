<html>
<head>
<!--bootstrap librerias-->



</head>

<body>

<script type="text/javascript">
//para exportar
 function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}
</script>

<div  style="padding:70px">
<div class="row">
<div class="col-md-12">
<h3 style="color:white;background-color:#8fd8d2;border-radius:.50rem!important">
<button type="button" style="background-color:#8fd8d2" class="btn btn-primary" onclick="printDiv('Documento')"><img src="https://img.icons8.com/cotton/64/000000/open-document.png"></button> Editor de Documentos 
</h3>
</div>
</div>
<div id="Documento" style="height: 300px;background-color: white;" >
</div>
</div>

	 
<script type="text/javascript">
	  $(document).ready(function() {
//opciones
var toolbarOptions = [
  [{ 'font': [] }],
    [{ 'align': [] }],
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  ['blockquote', 'code-block'],
  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
  ['link', 'image'],
  ['clean']                                         // remove formatting button
];
 //iniciar editor
var quill = new Quill('#Documento', {
    theme: 'snow',
	modules: {
    toolbar: toolbarOptions
  }
  });
  
  
	
});
	  </script>




	  
	  
</body>


</html>