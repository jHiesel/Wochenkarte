<?php
if (isset($_SESSION["hasAllowedCookies"])){
    CookieHelper::createCookie("allowedCookies",true);
    unset($_SESSION["hasAllowedCookies"]);
    header("Location: login");
}else {
    if (isset($_SESSION["loggedIn"])) {
     unset($_SESSION["loggedIn"]);
}
    require "Controller/indexController.php";
}



