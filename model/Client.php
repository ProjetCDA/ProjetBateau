<?php

class Client
{
    private $idClient;
    private $nom;
    private $prenom;
    private $adresseF;
    private $photoId;

    public function __construct($idClient,  $nom,  $prenom,  $adresseF,  $photoId)
    {
        $this->idClient = $idClient;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresseF = $adresseF;
        $this->photoId = $photoId;
    }
    public function getIdClient()
    {
        return $this->idClient;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAdresseF()
    {
        return $this->adresseF;
    }

    public function getPhotoId()
    {
        return $this->photoId;
    }

    public function setIdClient($idClient): void
    {
        $this->idClient = $idClient;
    }

    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    public function setAdresseF($adresseF): void
    {
        $this->adresseF = $adresseF;
    }

    public function setPhotoId($photoId): void
    {
        $this->photoId = $photoId;
    }
}
