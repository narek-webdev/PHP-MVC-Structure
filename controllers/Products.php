<?php 

namespace controller;

require 'models/Products.php';
use model\ProductsModel;

class Products 
{

    public function allProducts () 
    {
        $obj = new ProductsModel();
        $info = $obj->getAllProducts();

        echo json_encode($info);
    }

}