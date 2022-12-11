<?php

$router = require "core/router/Router.php";
require_once "core/router/routes.php";



$uri = htmlspecialchars(trim($_SERVER['REQUEST_URI'],'/'));

require $router->direct($uri);