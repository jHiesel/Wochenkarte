<?php
if (isset($_POST['allowed'])){
    CookieHelper::createCookie("allowed",true);
    require "view/index.view.php";
}else{
    require "view/cookie.view.php";
}
