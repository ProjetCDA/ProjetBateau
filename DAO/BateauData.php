<?php

require_once './DAO/DbConnect.php';

class BateauData extends DbConnect{
    private $dbConnect;    

    public function __construct()
    {
       $this->dbConnect = DbConnect::dbConnect();
    }

    public function selectBateau(){
        $query = "SELECT * FROM `bateau`;";
        $stmt = $this-> dbConnect-> prepare($query);
        $stmt->execute();
    }

}

?>

