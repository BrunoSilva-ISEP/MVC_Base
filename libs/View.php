<?php

/**
 * Class View
 */
class View
{
    function __construct()
    {
        echo "Main View <br>";
    }

    /**
     * @param $name
     */
    public  function render($name)
    {
        require 'views/'.$name.'.php';
    }
}
