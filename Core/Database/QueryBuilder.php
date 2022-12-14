<?php



class QueryBuilder
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function checkByUser($User)
    {

        $statement = $this->pdo->prepare("select * from User WHERE Email='".$User->getEmail()."' AND Password='".$User->getPassword()."'");

        $statement -> execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(sizeof($rows)){
            return true;
        }else{
            return false;
        }
    }

}