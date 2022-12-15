<?php

if (isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["Email"])) {

        if ($pdo->checkByUser(new User($_POST["Email"],$_POST["password"]))) {

            if (User::validate(strlen($_POST["Email"]), strlen($_POST["password"]))) {
                $_SESSION["loggedInUser"] = true;
                header("Location: loggedIn");

            }
        }


    $error = "something went wrong";
    require "view/login.view.php";

} elseif (isset($_SESSION["loggedInUser"])) {

    header("Location: loggedIn");

} else {
    require "view/login.view.php";
}

