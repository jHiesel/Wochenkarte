<?php

$router->define([
    "" => "Controller/cookieController.php",
    "login" => "Controller/loginController.php",
    "loggedIn" => "view/loggedIn.view.php",
    "loggout" => "Controller/logoutController.php"
]);