<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;

// GET Todos los roles 
$app->get('/api/Rol', function(Request $request, Response $response){
  $sql = ("CALL sp_select_rol");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $Rol = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($Rol);
    }else {
      echo json_encode("No existen roles en la BBDD.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 

// GET Recueperar roles por ID 
$app->get('/api/Rol/{id}', function(Request $request, Response $response){
  $IdRol = $request->getAttribute('id');
  $sql = ("CALL sp_selectbyid_rol ($IdRol)");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $Rol = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($Rol);
    }else {
      echo json_encode("No existen roles en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// POST Crear nuevo rol 
$app->post('/api/Rol/nuevo', function(Request $request, Response $response){
   $NombreRol = $request->getParam('NombreRol');
   $IdUsuario = $request->getParam('IdUsuario');
   
  
  $sql = ("CALL sp_InsertRol ('$NombreRol', '$IdUsuario')");

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':NombreRol', $NombreRol);
   

    $resultado->execute();
    echo json_encode("Nuevo rol guardado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 



// PUT Modificar rol 
$app->put('/api/Rol/modificar/{IdRol}', function(Request $request, Response $response){
   $IdRol = $request->getParam('IdRol');
   $NombreRol = $request->getParam('NombreRol');
   
  
  $sql = ("CALL sp_ModRol ('$IdRol','$NombreRol')");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

   $resultado->bindParam(':NombreRol', $NombreRol);
    

    $resultado->execute();
    echo json_encode("Rol modificado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// DELETE borar rol 
$app->delete('/api/Rol/delete/{id}', function(Request $request, Response $response){
   $IdRol = $request->getAttribute('id');
   $sql = ("CALL sp_eliminar_rol ($IdRol)");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("rol eliminado.");  
    }else {
      echo json_encode("No existe rol con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 







