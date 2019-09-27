<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;

// GET Todos los flujos 
$app->get('/api/TipoFlujo', function(Request $request, Response $response){
  $sql = ("CALL sp_select_TipoFlujo");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $TipoFlujo = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($TipoFlujo);
    }else {
      echo json_encode("No existen flujos en la BBDD.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 

// GET Recueperar flujos por ID 
$app->get('/api/TipoFlujo/{id}', function(Request $request, Response $response){
  $IdTipoFlujo = $request->getAttribute('id');
  $sql = ("CALL sp_selectbyid_TipoFlujo ($IdTipoFlujo)");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $TipoFlujo = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($TipoFlujo);
    }else {
      echo json_encode("No existen flujos en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// POST Crear nuevo rol 
$app->post('/api/TipoFlujo/nuevo', function(Request $request, Response $response){
   $NombreFlujo = $request->getParam('NombreFlujo');
    $IdProceso = $request->getParam('IdProceso');
	 $IdUsuario = $request->getParam('IdUsuario');
   
  
  $sql = ("CALL sp_InsertTipoflujo ('$NombreFlujo', '$IdProceso', '$IdUsuario')");

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':NombreFlujo', $NombreFlujo);
      $resultado->bindParam(':IdProceso', $IdProceso);
	  $resultado->bindParam(':IdUsuario', $IdUsuario);
   

    $resultado->execute();
    echo json_encode("Nuevo flujo guardado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 



// PUT Modificar flujo 
$app->put('/api/TipoFlujo/modificar/{IdTipoFlujo}', function(Request $request, Response $response){
   $IdTipoFlujo = $request->getParam('IdTipoFlujo');
   $NombreFlujo = $request->getParam('NombreFlujo');
    $IdProceso = $request->getParam('IdProceso');
   
   
  
  $sql = ("CALL sp_ModTipoFlujo ('$IdTipoFlujo','$NombreFlujo', '$IdProceso')");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

   $resultado->bindParam(':NombreFlujo', $NombreFlujo);
      $resultado->bindParam(':IdProceso', $IdProceso);
    

    $resultado->execute();
    echo json_encode("flujo modificado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// DELETE borar flujo 
$app->delete('/api/TipoFlujo/delete/{id}', function(Request $request, Response $response){
   $IdTipoFlujo = $request->getAttribute('id');
   $sql = ("CALL sp_eliminar_TipoFlujo ($IdTipoFlujo)");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("flujo eliminado.");  
    }else {
      echo json_encode("No existe flujo con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 







