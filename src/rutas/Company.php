<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;

// GET Todos los Company 
$app->get('/api/Company', function(Request $request, Response $response){
  $sql = ("CALL sp_select_Company");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $Company = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($Company);
    }else {
      echo json_encode("No existen compañias en la BBDD.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 

// GET Recueperar Company por ID 
$app->get('/api/Company/{id}', function(Request $request, Response $response){
  $IdCompany = $request->getAttribute('id');
  $sql = ("CALL sp_selectbyid_company ($IdCompany)");
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $Company = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($Company);
    }else {
      echo json_encode("No existen compañias en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 


// POST Crear nuevo cliente 
$app->post('/api/Company/nuevo', function(Request $request, Response $response){
   $NomCompany = $request->getParam('NomCompany');
   $NomAdmin = $request->getParam('NomAdmin');
   $Direccion = $request->getParam('Direccion');
   $Ciudad = $request->getParam('Ciudad');
   $Postal = $request->getParam('Postal');
   $Correo = $request->getParam('Correo'); 
   $Telefono = $request->getParam('Telefono'); 
    $IdPlanPago = $request->getParam('IdPlanPago'); 
    $pass = $request->getParam('pass');
  
  $sql = ("CALL sp_InsertCompany ('$NomCompany','$NomAdmin','$Direccion','$Ciudad','$Postal','$Correo','$Telefono','$IdPlanPago','$pass')");

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':NomCompany', $NomCompany);
    $resultado->bindParam(':NomAdmin', $NomAdmin);
    $resultado->bindParam(':Direccion', $Direccion);
    $resultado->bindParam(':Ciudad', $Ciudad);
    $resultado->bindParam(':Postal', $Postal);
    $resultado->bindParam(':Correo', $Correo);
	 $resultado->bindParam(':Telefono', $Telefono);
    $resultado->bindParam(':IdPlanPago', $IdPlanPago);
    $resultado->bindParam(':pass', $pass);


    $resultado->execute();
    echo json_encode("Nuevo cliente guardado.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 



// PUT Modificar cliente 
$app->put('/api/Company/modificar/{IdCompany}', function(Request $request, Response $response){
$IdCompany = $request->getParam('IdCompany');
   $NomCompany = $request->getParam('NomCompany');
   $NomAdmin = $request->getParam('NomAdmin');
   $Direccion = $request->getParam('Direccion');
   $Ciudad = $request->getParam('Ciudad');
   $Postal = $request->getParam('Postal');
   $Correo = $request->getParam('Correo');
   $Telefono = $request->getParam('Telefono'); 
   $IdPlanPago = $request->getParam('IdPlanPago'); 
    $pass = $request->getParam('pass');
  
  $sql = ("CALL sp_ModCompany ('$IdCompany','$NomCompany','$NomAdmin','$Direccion','$Ciudad','$Postal','$Correo','$Telefono','$IdPlanPago',
    '$pass')");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);


   $resultado->bindParam(':NomCompany', $NomCompany);
    $resultado->bindParam(':NomAdmin', $NomAdmin);
    $resultado->bindParam(':Direccion', $Direccion);
    $resultado->bindParam(':Ciudad', $Ciudad);
    $resultado->bindParam(':Postal', $Postal);
    $resultado->bindParam(':Correo', $Correo);
	   $resultado->bindParam(':Telefono', $Telefono);
      $resultado->bindParam(':IdPlanPago', $IdPlanPago);
       $resultado->bindParam(':pass', $pass);

    $resultado->execute();
    echo json_encode("Compañia modificada.");  

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 

/*
// DELETE borar company 
$app->delete('/api/Company/delete/{id}', function(Request $request, Response $response){
   $IdUsuario = $request->getAttribute('id');
   $sql = ("CALL sp_eliminar_usuario ($IdCompany)");
     
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("Company eliminada.");  
    }else {
      echo json_encode("No existe company con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
}); 

*/





