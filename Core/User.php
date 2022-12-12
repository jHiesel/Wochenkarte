<?php

class User
{
    var $email;
    var $password;

    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
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

    public static function validatePassword($password){
        if ($password <= 30 && $password >= 5){
            return true;
        }else{
            return false;
        }

}
    public static function validateEmail($email)
    {
        if ($email <= 20 && $email >= 5) {
            return true;
        } else {
            return false;
        }
    }

    public static function validate($email, $password){
        return User::validateEmail($email) & User::validatePassword($password);

    }
}