<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\UsuarioController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);


$router->get('/', [AppController::class,'index']);


//este es el url para usuario
$router->get('/usuario', [UsuarioController::class, 'index']);
$router->post('/usuarios/guardarAPI', [UsuarioController::class, 'guardarAPI']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
