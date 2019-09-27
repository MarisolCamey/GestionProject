<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;

// GET Todos los procesos 
$app->get('/api/Proceso', function(Request $request, Response $response){
    $sql = ("CALL sp_select_Proceso");
    try{
        $db = new db();
        $db = $db->conectDB();
        $resultado = $db->query($sql);

        if ($resultado->rowCount() > 0){
            $Proceso = $resultado->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($Proceso);
        }else {
            echo json_encode("No existen procesos en la BBDD.");
        }
        $resultado = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

// GET Recueperar procesos por ID 
$app->get('/api/Proceso/{id}', function(Request $request, Response $response){
  $IdProceso = $request->getAttribute('id');
  $sql = ("CALL sp_selectbyid_Proceso ($IdProceso)");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $Proceso = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($Proceso);
    }else {
      echo json_encode("No existen procesos en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// POST Crear nuevo proceso 
$app->post('/api/Proceso/nuevo', function(Request $request, Response $response){
   $NombreProceso = $request->getParam('NombreProceso');
   $IdOficina = $request->getParam('IdOficina');
   $IdUsuario = $request->getParam('IdUsuario');

   
  
  $sql = ("CALL sp_InsertProceso ('$NombreProceso', '$IdOficina', '$IdUsuario')");

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':NombreProceso', $NombreProceso);
     $resultado->bindParam(':IdOficina', $IdOficina);

   

    $resultado->execute();
    echo json_encode("Nuevo proceso guardado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 



// PUT Modificar flujo 
$app->put('/api/Proceso/modificar/{IdProceso}', function(Request $request, Response $response){
   $IdProceso = $request->getParam('IdProceso');
   $NombreProceso = $request->getParam('NombreProceso');
   $IdOficina = $request->getParam('IdOficina');

   
   
  
  $sql = ("CALL sp_ModProceso ('$IdProceso','$NombreProceso', '$IdOficina')");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

   $resultado->bindParam(':NombreProceso', $NombreProceso);
   $resultado->bindParam(':IdOficina', $IdOficina);
    

    $resultado->execute();
    echo json_encode("proceso modificado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// DELETE borar proceso 
$app->delete('/api/Proceso/delete/{id}', function(Request $request, Response $response){
   $IdProceso = $request->getAttribute('id');
   $sql = ("CALL sp_eliminar_Proceso ($IdProceso)");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("procesp eliminado.");  
    }else {
      echo json_encode("No existe procesp con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 







