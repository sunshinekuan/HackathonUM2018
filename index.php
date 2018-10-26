<?php

    //get method;
    $method = $_SERVER['REQUEST_METHOD'];
    //get link request
    // $request = trim($_SERVER['PATH_INFO'],"/");
    
    // var_dump($request);
    
    require(__DIR__.'/View/home.php');

?>