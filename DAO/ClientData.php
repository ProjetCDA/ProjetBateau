<?php require_once './DAO/DbConnect.php';
class ClientData extends DbConnect
{
    private $dbConnect;
    public function __construct()
    {
        $this->dbConnect = DbConnect::dbConnect();
    }
    public function ajoutClientBDD($nom, $prenom, $adresseF, $photoId){
        $req = "INSERT INTO client(nom, prenom, adresse_facturation, photo_identite)
        VALUES
        (:nom, :prenom, :adresseF, :photoId)";

        $stmt = $this->dbConnect()->prepare($req);

        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $stmt->bindValue(":adresseF", $adresseF, PDO::PARAM_STR);
        $stmt->bindValue(":photoId", $photoId, PDO::PARAM_STR);

        $resultat = $stmt->execute();

        $stmt->closeCursor();
    }

    
}