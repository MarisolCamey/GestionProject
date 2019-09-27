<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;

// GET Todos los Status 
$app->get('/api/Status', function(Request $request, Response $response){
  $sql = ("CALL sp_select_status");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $Status = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($Status);
    }else {
      echo json_encode("No existen Status en la BBDD.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 

// GET Recueperar Status por ID 
$app->get('/api/Status/{id}', function(Request $request, Response $response){
  $Status = $request->getAttribute('id');
  $sql = ("CALL sp_selectbyid_status ($Status)");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $Status = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($Status);
    }else {
      echo json_encode("No existen Status en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// POST Crear nuevo Status 
$app->post('/api/Status/nuevo', function(Request $request, Response $response){
   $Descripcion = $request->getParam('Descripcion');
   
  
  $sql = ("CALL sp_InsertResOficina ('$Descripcion')");

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':Descripcion', $Descripcion);
    

    $resultado->execute();
    echo json_encode("Nuevo Status guardado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 



// PUT Modificar Status 
$app->put('/api/Status/modificar/{IdStatus }', function(Request $request, Response $response){
   $IdStatus = $request->getParam('IdStatus');
   $Descripcion = $request->getParam('Descripcion');
   
  
  $sql = ("CALL sp_ModResOficina ('$IdStatus','$Descripcion')");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

   $resultado->bindParam(':Descripcion', $Cargo);
    
    $resultado->execute();
    echo json_encode("Status modificado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// DELETE borar Status 
$app->delete('/api/Status/delete/{id}', function(Request $request, Response $response){
   $IdStatus = $request->getAttribute('id');
   $sql = ("CALL sp_eliminar_resOficina ($IdStatus)");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("Status eliminado.");  
    }else {
      echo json_encode("No existe Status con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 







