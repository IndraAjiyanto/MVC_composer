<?php

$path = "/index";

if(isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'];
}

require_once "../app/view/".$path.".php";