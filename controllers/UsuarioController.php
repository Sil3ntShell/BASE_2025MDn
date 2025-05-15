<?php

namespace Controllers;

use Model\ActiveRecord;
use MVC\Router;


class UsuarioController extends ActiveRecord {

public function index(Router $router) {
    $router ->render('usuarios/index', []);
}

}
