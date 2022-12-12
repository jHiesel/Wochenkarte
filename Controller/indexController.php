<?php

if (isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["Email"])){
    foreach ($CheckUser as $value){
        if ($value->getEmail() === $_POST["Email"] && $value->getPassword() === $_POST["password"]){
            header("Location: loggedIn");
        }
    }
}else{
    require "view/index.view.php";
}