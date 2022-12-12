<?php

if ((isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["Email"])) || isset($_SESSION["loggedIn"])){
    foreach ($CheckUser as $value){

        if ($value->getEmail() === $_POST["Email"] && $value->getPassword() === $_POST["password"]){

            if(User::validate(strlen($_POST["Email"]), strlen($_POST["password"]))){

                $u = new User($_POST["Email"],$_POST["password"]);
                $_SESSION["LoggedInUser"] = serialize($u);
                header("Location: loggedIn");

            }
        }
        if (isset($_SESSION["loggedInUser"])){
            $user = unserialize($_SESSION["loggedInUser"]);
            foreach ($CheckUser as $eachUser){
                if ($user->getEmail() == $eachUser->getEmail() && $user->getPassword() == $eachUser->getPassword()){
                    header("Location: loggedIn");
                }
            }
        }
    }

    $error = "something went wrong";
    require "view/index.view.php";
}else{
    require "view/index.view.php";
}