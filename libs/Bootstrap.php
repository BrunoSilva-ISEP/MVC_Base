<?php

class Bootstrap{

    function __construct(){
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

        $url = explode('/',$url);
        $url = array_filter($url);

        $file = 'controllers/'.$url[1].'.php';
        if(file_exists($file)){
            require $file;
        }else{
            //throw new Exception("The file: $file does not exists. ");
            require "controllers/error.php";
            $error = new Error();
            return false;
        }

        $controller = new $url[1];

        if(isset($url[3])){
            $controller->{$url[2]}($url[3]);
            return;
        }
        if(isset($url[2])){
            $controller->{$url[2]}();
        }
    }
}
