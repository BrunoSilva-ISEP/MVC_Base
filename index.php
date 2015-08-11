<?php
/**
 * vagrant ssh
 *
 * cd /etc/nginx/sites-available
 * sudo nano test.app
 *
 *
 * location / {
 *  rewrite ^(.+)$ /index.php?url=$1;
 * }
 * sudo service nginx reload
 */


// Use an autoloader!
require "libs/Bootstrap.php";
require "libs/Controller.php";
require "libs/Model.php";
require "libs/View.php";

$ap = new Bootstrap();
