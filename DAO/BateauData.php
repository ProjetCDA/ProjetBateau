<?php require_once './DAO/DbConnect.php';
class BateauData extends DbConnect
{
    private $dbConnect;
    public function __construct()
    {
        $this->dbConnect = DbConnect::dbConnect();
    }
    
}