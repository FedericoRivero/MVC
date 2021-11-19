<?php

namespace App\controllers;
use App\controllers\BaseController;


class UsuarioController extends BaseController {

	public function getUsuario()
    {
        $usuario=array(
            array(
            'nombre'=>'Juan',
            'apellido'=>'Perez',
            'email'=>'xzy@xyz.com',
            'imagen'=>'https://pbs.twimg.com/profile_images/1012362101510160384/EjayQ10E_400x400.jpg',
            'telefono'=>'1234567890'
            )
        );
        
        return $this->renderHTML(
            'usuario.twig',
            [
                'usuarios'=>$usuario,
            ]
        );
    }

}

?>