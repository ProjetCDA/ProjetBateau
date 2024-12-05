<?php
require_once "./DAO/ClientData.php";

// class addClientControlleur
// {
//     private $ClientData;
//     public function __construct($ClientData)
//     {
//         $this->ClientData = new ClientData;
//     }


//     public function AjoutClient()
//     {
      
//     }
// }
$ClientData = new ClientData;
  if (isset($_POST['AjoutClientSubmit'])) {
            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresseF']) && !empty($_POST['photoId'])) {

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $adressseF = $_POST['adresseF'];
                $photoId = $_POST['photoId'];
                $ClientData->ajoutClientBDD($nom, $prenom, $adressseF, $photoId);
            }
        }