<?php

namespace Model;

class usuarios extends ActiveRecord {

    public $tabla = 'usuarios';
    public $columnasDB = [
        'usuario_nombre',
        'usuario_apellidos',
        'usuario_nit',
        'usuario_telefono',
        'usuario_correo',
        'usuario_estado',
        'usuario_situacion',
    ];

    public $idTabla = 'usuario_id';

    public $usuario_id;
    public $usuario_nombres;
    public $usuario_apellidos;
    public $usuario_nit;
    public $usuario_telefono;
    public $usuario_correo;
    public $usuario_estado;
    public $usuario_situacion;

    public function __construct($args = []) {
        $this->usuario_id = $args['usuario_id'];
        $this->usuario_nombres = $args['usuario_nombres'];
        $this->usuario_apellidos = $args['usuario_apellidos'];
        $this->usuario_nit = $args['usuario_nit']??0;
        $this->usuario_telefono = $args['usuario_telefono']??0;
        $this->usuario_correo = $args['usuario_correro'];
        $this->usuario_estado = $args['usuario_estado'];
        $this->usuario_situacion = $args['usuario_situacion']??1;
    }

}


?>
