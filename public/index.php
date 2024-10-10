<?php

require_once "../vendor/autoload.php";

use Indra\Mvc\App\Router;
use Indra\Mvc\Controller\HomeController;

Router::add('GET', '/index.php', HomeController::class , "index");
Router::add('GET', '/hello', HomeController::class, "hello");
Router::add('GET', '/world', HomeController::class, "world");

Router::run();