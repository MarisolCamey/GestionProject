<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new \Slim\App;





// POST
$app->post('/api/Login', function(Request $request, Response $response){
    $Email = $request->getParam('Email');
    $Contra = $request->getParam('Contra');


    $sql = ("CALL login (('$Email'),'$Contra')");

    try{
        $db = new db();
        $db = $db->conectDB();
        $resultado = $db->prepare($sql);
        $resultado->execute();


        if ($resultado->rowCount() > 0){
            $data = $resultado->fetchAll(PDO::FETCH_OBJ);
             $result= json_encode($data);
        }else {
            $result= json_encode("error");
        }
        return $response->write($result)->withHeader('Content-Type', 'application/json');
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});










