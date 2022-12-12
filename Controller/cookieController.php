<?php
if (isset($_SESSION["hasAllowedCookies"])){
    CookieHelper::createCookie("allowedCookies",true);
    unset($_SESSION["hasAllowedCookies"]);
    header("Location: login");
}else {
    if (isset($_SESSION["loggedInUser"])) {
     unset($_SESSION["loggedInUser"]);
}
    require "Controller/indexController.php";
}



