<?php

if (isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["Email"])){
    foreach ($CheckUser as $value){
        if ($value->getEmail() === $_POST["Email"] && $value->getPassword() === $_POST["password"]){
            if(User::validate(strlen($_POST["Email"]), strlen($_POST["password"]))){
                $_SESSION["loggedInUser"] = true;
                header("Location: loggedIn");
            }
        }
    }

    $error = "something went wrong";
    require "view/index.view.php";

}elseif (isset($_SESSION["loggedInUser"])){

    header("Location: loggedIn");

}else{
    require "view/index.view.php";
}

