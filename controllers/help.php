<?php

class Help extends Controller{

    function __construct(){
        echo "In help";
    }
    public  function other($arg = false){
        echo " - Inside other";

        if($arg) echo " Optional".$arg;

        require 'models/help_model.php';

        $model = new Help_Model();
    }
}
