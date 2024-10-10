<?php

require_once "../vendor/autoload.php";

use Indra\Mvc\App\Router;

Router::add('GET', '/index.php', "HomeController", "index");
Router::add('GET', '/login', "HomeController", "login");
Router::add('GET', '/register', "HomeController", "register");

Router::run();