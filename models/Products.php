<?php 

namespace model;

require 'connect.php';
use connect\DB;

class ProductsModel  
{

  public function getAllProducts () 
  {
    $query = ['a' => '123'];
    // $query = DB::query('SELECT * FROM `products`')->fetchAll(\PDO::FETCH_ASSOC);    
    return $query;
  }

}