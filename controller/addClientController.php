<?php
// require_once "ClientData.php";

class addClientControlleur
{
    private $ClientData;

    public function AjoutClient()
    {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresseF']) && !empty($_POST['photoId'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adrssseF = $_POST['adresseF'];
            $photoId = $_POST['photoId'];
            var_dump($nom) ;
            var_dump($prenom) ;
            var_dump($adrssseF) ;
            var_dump($photoId) ;
        }
    }
}
