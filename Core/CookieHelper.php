<?php

class  CookieHelper
{
    public static function checkForCookies($cookieName)
    {
        if (isset($_COOKIE[$cookieName])) {
            return true;
        } else {
            return false;
        }
    }

    public static function createCookie($cookieName, $cookieValue)
    {
        setCookie($cookieName, $cookieValue);
    }
}