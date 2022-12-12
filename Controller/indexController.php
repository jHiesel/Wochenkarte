<?php

if ((isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["Email"])) || isset($_SESSION["loggedIn"])){
    foreach ($CheckUser as $value){
        if ($value->getEmail() === $_POST["Email"] && $value->getPassword() === $_POST["password"]){
            $_SESSION["loggedIn"]["Email"] = $value->getEmail();
            $_SESSION["loggedIn"]["password"] = $value->getPassword();
            header("Location: loggedIn");
        }
        if (isset($_SESSION["loggedIn"])){
        if($_SESSION["loggedIn"]["Email"] === $value->getEmail() && $_SESSION["loggedIn"]["password"] === $value->getPassword()){
            header("Location: loggedIn");
        }
        }
    }

    $error = "something went wrong";

    require "view/index.view.php";
}else{
    require "view/index.view.php";
}