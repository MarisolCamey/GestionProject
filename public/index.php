<?php
header('Content-Type: application/json');
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../src/config/db.php';

$config['displayErrorDetails'] = true;

$app = new \Slim\App (['settings'=> $config]);

// Ruta clientes



require '../src/rutas/Oficina.php';
require '../src/rutas/ResOficina.php';
require '../src/rutas/Status.php';
require '../src/rutas/Rol.php';
require '../src/rutas/Documento.php';
require '../src/rutas/PlanPago.php';
require '../src/rutas/TipoFlujo.php';
require '../src/rutas/Proceso.php';
require '../src/rutas/Usuario.php';
require '../src/rutas/Company.php';
require '../src/rutas/Login.php';

$app->run();