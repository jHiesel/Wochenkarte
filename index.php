<?php

require_once "core/router/Router.php";
$router = new Router;

require "core/router/routes.php";

require_once "bootstrap.php";

$pdo = new QueryBuilder(Connection::make($databaseConfig));



$uri = htmlspecialchars(trim($_SERVER['REQUEST_URI'], '/'));

require $router->direct($uri);