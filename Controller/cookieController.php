<?php
if (isset($_SESSION["hasAllowedCookies"])){
    CookieHelper::createCookie("allowedCookies",true);
    unset($_SESSION["hasAllowedCookies"]);
    header("Location: login");
}else{
    require "Controller/indexController.php";
}



