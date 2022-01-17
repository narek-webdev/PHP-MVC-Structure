<?php 

namespace controller;

require 'models/Posts.php';
use model\PostsModel;

class Posts 
{

    public function allPosts () 
    {
        $obj = new PostsModel();
        $info = $obj->getAllPosts();

        $myfile = fopen("Products.php", "r") or die("Unable to open file!");

        echo $myfile;

        echo json_encode($info);
    }

}