<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;

// GET Todos los documentos 
$app->get('/api/Documento', function(Request $request, Response $response){
  $sql = ("CALL sp_select_documento");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $Documento = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($Documento);
    }else {
      echo json_encode("No existen documentos en la BBDD.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 

// GET Recueperar documento por ID 
$app->get('/api/Documento/{id}', function(Request $request, Response $response){
  $IdDoc = $request->getAttribute('id');
  $sql = ("CALL sp_selectbyid_rol ($IdDoc)");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $Documento = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($Documento);
    }else {
      echo json_encode("No existen documentos en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// POST Crear nuevo documento 
$app->post('/api/Documento/nuevo', function(Request $request, Response $response){
   $TipoArchivo = $request->getParam('TipoArchivo');
   $IdOficina = $request->getParam('IdOficina');
   $urlarchivo = $request->getParam('urlarchivo');
   
  
  $sql = ("CALL sp_InsertDoc ('$TipoArchivo', '$IdOficina','$urlarchivo')");

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':TipoArchivo', $TipoArchivo);
    $resultado->bindParam(':IdOficina', $IdOficina);
    $resultado->bindParam(':urlarchivo', $urlarchivo);
   

    $resultado->execute();
    echo json_encode("Nuevo documento guardado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 



// PUT Modificar documento 
$app->put('/api/Documento/modificar/{IdDoc}', function(Request $request, Response $response){
   $IdDoc = $request->getParam('IdDoc');
   $TipoArchivo = $request->getParam('TipoArchivo');
   $IdOficina = $request->getParam('IdOficina');
   $urlarchivo = $request->getParam('urlarchivo');
   
  
  $sql = ("CALL sp_ModRol ('$IdDoc','$TipoArchivo', '$IdOficina', '$urlarchivo')");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

   $resultado->bindParam(':TipoArchivo', $TipoArchivo);
   $resultado->bindParam(':IdOficina', $IdOficina);
   $resultado->bindParam(':urlarchivo', $urlarchivo);
    

    $resultado->execute();
    echo json_encode("documento modificado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// DELETE borar rol 
$app->delete('/api/Documento/delete/{id}', function(Request $request, Response $response){
   $IdDoc = $request->getAttribute('id');
   $sql = ("CALL sp_eliminar_rol ($IdDoc)");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("documento eliminado.");  
    }else {
      echo json_encode("No existe documento con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 







