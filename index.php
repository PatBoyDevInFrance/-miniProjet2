<?php
if( isset($_GET['page']) && !empty($_GET['page'])){

    $page = trim(strtolower($_GET['page']));
} else {

    $page = "home";
}
echo "Hello";

$allpages = scandir("controllers/");

if(in_array($page.'controllers/',$allpages)){
    include_once "models/" .$page. "_model.php";
    include_once "views/" .$page. "_view.php";
    include_once "controllers/" .$page. "_controller.php";
    
}