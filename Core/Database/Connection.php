<?php



class Connection
{


    public static function make($config)
    {
        try {

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['user'],
                $config['pws'],
                $config['options']
            );


        } catch (PDOException $e) {
            var_dump($config);
            echo($e);
            die('</br> could not connect');

        }
    }

}