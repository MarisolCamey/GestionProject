<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;

// GET Todos los usuarios 
$app->get('/api/Usuario', function(Request $request, Response $response){
  $sql = ("CALL sp_select_usuario");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $usuarios = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($usuarios);
    }else {
      echo json_encode("No existen usuarios en la BBDD.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 

// GET Recueperar usuarios por ID 
$app->get('/api/Usuario/{id}', function(Request $request, Response $response){
  $IdUsuario = $request->getAttribute('id');
  $sql = ("CALL sp_selectbyid_usuario ($IdUsuario)");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $usuarios = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($usuarios);
    }else {
      echo json_encode("No existen usuarios en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// POST Crear nuevo cliente 
$app->post('/api/Usuario/nuevo', function(Request $request, Response $response){
   $Nombre = $request->getParam('Nombre');
   $Correo = $request->getParam('Correo');
   $Telefono = $request->getParam('Telefono');
   $NomUsuario = $request->getParam('NomUsuario');
   $Pass = $request->getParam('Pass');
   $IdCompany = $request->getParam('IdCompany'); 
   $IdStatus = $request->getParam('IdStatus'); 
  
  $sql = ("CALL sp_InsertUsuario ('$Nombre','$Correo','$Telefono','$NomUsuario','$Pass','$IdCompany','$IdStatus')");

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':Nombre', $Nombre);
    $resultado->bindParam(':Correo', $Correo);
    $resultado->bindParam(':Telefono', $Telefono);
    $resultado->bindParam(':NomUsuario', $NomUsuario);
    $resultado->bindParam(':Pass', $Pass);
    $resultado->bindParam(':IdCompany', $IdCompany);
	$resultado->bindParam(':IdStatus', $IdStatus);

    $resultado->execute();
    echo json_encode("Nuevo cliente guardado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 



// PUT Modificar cliente 
$app->put('/api/Usuario/modificar/{IdUsuario}', function(Request $request, Response $response){
   $IdUsuario = $request->getParam('IdUsuario');
   $Nombre = $request->getParam('Nombre');
   $Correo = $request->getParam('Correo');
   $Telefono = $request->getParam('Telefono');
   $NomUsuario = $request->getParam('NomUsuario');
   $Pass = $request->getParam('Pass');
   $IdCompany = $request->getParam('IdCompany'); 
   $IdStatus = $request->getParam('IdStatus'); 
  
  $sql = ("CALL sp_ModUsuario ('$IdUsuario','$Nombre','$Correo','$Telefono','$NomUsuario','$Pass','$IdCompany','$IdStatus')");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

   $resultado->bindParam(':Nombre', $Nombre);
    $resultado->bindParam(':Correo', $Correo);
    $resultado->bindParam(':Telefono', $Telefono);
    $resultado->bindParam(':NomUsuario', $NomUsuario);
    $resultado->bindParam(':Pass', $Pass);
    $resultado->bindParam(':IdCompany', $IdCompany);
	$resultado->bindParam(':IdStatus', $IdStatus);

    $resultado->execute();
    echo json_encode("Usuario modificado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// DELETE borar cliente 
$app->delete('/api/Usuario/delete/{id}', function(Request $request, Response $response){
   $IdUsuario = $request->getAttribute('id');
   $sql = ("CALL sp_eliminar_usuario ($IdUsuario)");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("Usuario eliminado.");  
    }else {
      echo json_encode("No existe usuario con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 







