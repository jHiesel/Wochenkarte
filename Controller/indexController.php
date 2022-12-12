<?php

if ((isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["Email"])) || isset($_SESSION["loggedInUser"])){
    foreach ($CheckUser as $value){

        if ($value->getEmail() === $_POST["Email"] && $value->getPassword() === $_POST["password"]){

            if(User::validate(strlen($_POST["Email"]), strlen($_POST["password"]))){

                $u = new User($_POST["Email"],$_POST["password"]);
                $_SESSION["loggedInUser"] = serialize($u);
                header("Location: loggedIn");

            }
        }

        if (isset($_SESSION["loggedInUser"])){
            var_dump("help");
            $user = unserialize($_SESSION["loggedInUser"]);
                if ($user->getEmail() === $value->getEmail() && $user->getPassword() === $value->getPassword()){
                    header("location: loggedIn");
                }

        }
    }

    $error = "something went wrong";
    require "view/index.view.php";
}else{
    require "view/index.view.php";
}

