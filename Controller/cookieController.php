<?php
if (isset($_POST["allowed"])) {

    CookieHelper::createCookie("allowedCookies", true);
    unset($_SESSION["hasAllowedCookies"]);
    header("Location: login");

}
require "Controller/loginController.php";




