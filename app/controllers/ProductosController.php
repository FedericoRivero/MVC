<?php

namespace App\controllers;
use App\controllers\BaseController;


class ProductosController extends BaseController {

	public function getProductos()
    {
        $precio=array(150,210,352,954,500,600,700,800,900,1000);
        $productos='100';
        $productos_nombre='Producto 1';
        $productos_descripcion='Descripcion del producto 1';


        
        return $this->renderHTML(
            'productos.twig',
            [
                'categoria'=>"Enlatados",
                'productos'=>$productos,
                'productos_nombre'=>$productos_nombre,
                'precios'=>$precio,
                'productos_descripcion'=>$productos_descripcion,
            ]
        );
    }

}

?>