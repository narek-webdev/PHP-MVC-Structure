<?php 

namespace controller;

require 'models/User.php';
use model\UserModel;

class User
{

    public function get () 
    {
        // $obj = new UserModel();
        // $info = $obj->getAllUsers();

        // echo json_encode($info);
        echo json_encode("AA");
    }

}