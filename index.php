<?php

    //get method;
    $method = $_SERVER['REQUEST_METHOD'];
    //get link request
    $request = trim($_SERVER['PATH_INFO'],"/");
    
    // var_dump($request);
    
    if($request == NULL){
        require(__DIR__.'/View/home.html');
    }

?>