<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;

// GET Todos los ResOficina 
$app->get('/api/ResOficina', function(Request $request, Response $response){
  $sql = ("CALL sp_select_ResOficina");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $ResOficina = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($ResOficina);
    }else {
      echo json_encode("No existen Responsables de oficina en la BBDD.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 

// GET Recueperar ResOficina por ID 
$app->get('/api/ResOficina/{id}', function(Request $request, Response $response){
  $IdResOficina = $request->getAttribute('id');
  $sql = ("CALL sp_selectbyid_ResOficina ($IdResOficina)");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $ResOficina = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($ResOficina);
    }else {
      echo json_encode("No existen responsables de oficina en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// POST Crear nuevo ResOficina 
$app->post('/api/ResOficina/nuevo', function(Request $request, Response $response){
   $Cargo = $request->getParam('Cargo');
   $IdOficina = $request->getParam('IdOficina');
   $IdUsuario = $request->getParam('IdUsuario');
    $IdUsuario = $request->getParam('IdUsuario');

  
  $sql = ("CALL sp_InsertResOficina ('$Cargo','$IdOficina','$IdUsuario','$IdUsuario' ");

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':Cargo', $Cargo);
    $resultado->bindParam(':IdOficina', $IdOficina);
    $resultado->bindParam(':IdUsuario', $IdUsuario);


    $resultado->execute();
    echo json_encode("Nuevo Responsable de oficina guardado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 



// PUT Modificar ResOficina 
$app->put('/api/ResOficina/modificar/{IdResOficina}', function(Request $request, Response $response){
   $IdResOficina = $request->getParam('IdResOficina');
   $Cargo = $request->getParam('Cargo');
   $IdOficina = $request->getParam('IdOficina');
   $IdUsuario = $request->getParam('IdUsuario');

  
  $sql = ("CALL sp_ModResOficina ('$IdResOficina','$Cargo','$IdOficina','$IdUsuario')");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

   $resultado->bindParam(':Cargo', $Cargo);
    $resultado->bindParam(':IdOficina', $IdOficina);
    $resultado->bindParam(':IdUsuario', $IdUsuario);


    $resultado->execute();
    echo json_encode("Responsable de oficina modificado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// DELETE borar ResOficina 
$app->delete('/api/ResOficina/delete/{id}', function(Request $request, Response $response){
   $IdResOficina = $request->getAttribute('id');
   $sql = ("CALL sp_eliminar_resOficina ($IdResOficina)");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("Responsable de oficina eliminado.");  
    }else {
      echo json_encode("No existe Responsable de oficina con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 







