<?php

class User
{
    var $email;
    var $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public static function validate($email, $password)
    {
        return User::validateEmail($email) & User::validatePassword($password);

    }

    public static function validateEmail($email)
    {
        if ($email <= 30 && $email >= 5) {
            return true;
        } else {
            return false;
        }
    }

    public static function validatePassword($password)
    {
        if ($password <= 20 && $password >= 5) {
            return true;
        } else {
            return false;
        }

    }

    public static function loggout()
    {
        if (isset($_SESSION['loggedInUser'])) {
            unset($_SESSION['loggedInUser']);
        }
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}