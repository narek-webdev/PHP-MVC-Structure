<?php 

namespace model;

require 'connect.php';
use connect\DB;

class UserModel 
{

  public function getAllUsers () 
  {
    $query = DB::query('SELECT * FROM `users`')->fetchAll(\PDO::FETCH_ASSOC);    
    return $query;
  }

}