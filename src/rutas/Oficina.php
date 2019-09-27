<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;

// GET Todas las oficinas 
$app->get('/api/Oficina', function(Request $request, Response $response){
    $sql = ("CALL sp_select_oficina");
    try{
        $db = new db();
        $db = $db->conectDB();
        $resultado = $db->query($sql);

        if ($resultado->rowCount() > 0){
            $oficinas = $resultado->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($oficinas);
        }else {
            echo json_encode("No existen oficinas en la BBDD.");
        }
        $resultado = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

// GET Recueperar oficinas por ID 
$app->get('/api/Oficina/{id}', function(Request $request, Response $response){
  $IdOficina = $request->getAttribute('id');
  $sql = ("CALL sp_selectbyid_oficina ($IdOficina)");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $oficinas = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($oficinas);
    }else {
      echo json_encode("No existen oficinas en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// POST Crear nuevo cliente 
$app->post('/api/Oficina/nuevo', function(Request $request, Response $response){
   $NomOficina = $request->getParam('NomOficina');
   $Departamento = $request->getParam('Departamento');
   $Correo = $request->getParam('Correo');
   $Telefono = $request->getParam('Telefono');
   $IdCompany = $request->getParam('IdCompany');
    $IdUsuario = $request->getParam('IdUsuario');


    $sql = ("CALL sp_InsertOficina ('$NomOficina','$Departamento','$Correo','$Telefono','$IdCompany','$IdUsuario')");

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':NomOficina', $NomOficina);
    $resultado->bindParam(':Departamento', $Departamento);
    $resultado->bindParam(':Correo', $Correo);
    $resultado->bindParam(':Telefono', $Telefono);
    $resultado->bindParam(':IdCompany', $IdCompany);
	$resultado->bindParam(':IdUsuario', $IdUsuario);

    $resultado->execute();
    echo json_encode("Nueva oficina guardada.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 



// PUT Modificar oficina 
$app->put('/api/Oficina/modificar/{IdOficina}', function(Request $request, Response $response){
   $IdOficina = $request->getParam('IdOficina');
   $NomOficina = $request->getParam('NomOficina');
   $Departamento = $request->getParam('Departamento');
   $Correo = $request->getParam('Correo');
   $Telefono = $request->getParam('Telefono');
   $IdCompany = $request->getParam('IdCompany');
    $IdUsuario = $request->getParam('IdUsuario');

    $sql = ("CALL sp_ModOficina ('$IdOficina','$NomOficina','$Departamento','$Correo','$Telefono','$IdCompany', '$IdUsuario')");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

   $resultado->bindParam(':NomOficina', $NomOficina);
    $resultado->bindParam(':Departamento', $Departamento);
    $resultado->bindParam(':Correo', $Correo);
    $resultado->bindParam(':Telefono', $Telefono);
    $resultado->bindParam(':IdCompany', $IdCompany);
      $resultado->bindParam(':IdUsuario', $IdUsuario);

    $resultado->execute();
    echo json_encode("Oficina modificada.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// DELETE borar cliente 
$app->delete('/api/Oficina/delete/{id}', function(Request $request, Response $response){
   $IdOficina = $request->getAttribute('id');
   $sql = ("CALL sp_eliminar_oficina ($IdOficina)");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("oficina eliminada.");  
    }else {
      echo json_encode("No existe oficina con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 







