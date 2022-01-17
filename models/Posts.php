<?php 

namespace model;

require 'connect.php';
use connect\DB;

class PostsModel  
{

  public function getAllPosts () 
  {
    $query = DB::query('SELECT * FROM `posts`')->fetchAll(\PDO::FETCH_ASSOC);    
    return $query;
  }

}