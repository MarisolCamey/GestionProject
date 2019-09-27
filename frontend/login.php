<?php /*session_start();

    if(isset($_SESSION['NomUsuario'])) {
        header('location: index.php');
    }*/

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $NomUsuario = $_POST['NomUsuario'];
        $Pass = $_POST['Pass'];
      
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=bd_gestiones', 'root', '');
           // $conexion = new PDO('mysql:host=fdb23.awardspace.net:3306; dbname=3154767_gestiones', '3154767_gestiones', '2019Acamey.');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare("SELECT NomUsuario, Pass FROM usuario WHERE NomUsuario = '$NomUsuario' AND Pass = '$Pass'");
        // $statement = $conexion->prepare('
        //SELECT * FROM login WHERE usuario = :usuario AND clave = :clave'
        // );

        
       $statement->execute();

        //$statement->execute(array(
        //  ':usuario' => $usuario,
        //     ':clave' => $clave
        // ));
            
            
        $resultado = $statement->fetch();
        
        if ($resultado != false ){
            $_SESSION['NomUsuario'] = $NomUsuario;
            header('location: index.php');
        }else{
            $error .= '<i>Este usuario no existe</i>';
        }
    }
    
require 'login-vista.php';


?>