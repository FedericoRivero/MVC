<?php

namespace App\controllers;
use App\controllers\BaseController;


class ListaController extends BaseController {

	public function getLista()
    {
        $lista=array(
            array('nombre'=>'Producto 1','precio'=>'150','descripcion'=>'Descripcion del producto 1','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
            array('nombre'=>'Producto 2','precio'=>'210','descripcion'=>'Descripcion del producto 2','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
            array('nombre'=>'Producto 3','precio'=>'352','descripcion'=>'Descripcion del producto 3','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
            array('nombre'=>'Producto 4','precio'=>'954','descripcion'=>'Descripcion del producto 4','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
            array('nombre'=>'Producto 5','precio'=>'500','descripcion'=>'Descripcion del producto 5','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
            array('nombre'=>'Producto 6','precio'=>'600','descripcion'=>'Descripcion del producto 6','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
            array('nombre'=>'Producto 7','precio'=>'700','descripcion'=>'Descripcion del producto 7','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
            array('nombre'=>'Producto 8','precio'=>'800','descripcion'=>'Descripcion del producto 8','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
            array('nombre'=>'Producto 9','precio'=>'900','descripcion'=>'Descripcion del producto 9','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
            array('nombre'=>'Producto 10','precio'=>'1000','descripcion'=>'Descripcion del producto 10','imagen'=>'https://cdn-icons-png.flaticon.com/512/2674/2674486.png'),
        );

        return $this->renderHTML(
            'lista.twig',
            [
                'listas'=>$lista,
            ]
        );
    }

}