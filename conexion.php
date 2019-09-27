<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost:80;dbname=bd_gestiones', 'root', '');
    	//$conexion = new PDO('mysql:host=fdb23.awardspace.net:3306; dbname=3154767_gestiones', '3154767_gestiones', '2019Acamey.');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>