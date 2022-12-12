<?php
session_start();

require_once "Core/CookieHelper.php";


require_once "core/router/Router.php";
$router = new Router;
require "core/router/routes.php";

require "Core/User.php";
$CheckUser = [new User("johannes@hiesel", "123"), new User("test@test","123")];

$uri = htmlspecialchars(trim($_SERVER['REQUEST_URI'],'/'));

if (isset($_POST["allowed"])){
    $_SESSION["hasAllowedCookies"] = true;
}
require $router->direct($uri);