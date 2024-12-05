<?php
require_once "./controller/addClientController.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/CSS/style.css">
    <title>Document</title>
</head>

<body>
    <h1>Création de client</h1>
    <form method="POST">

        <label for="nom">Nom</label>
        <input type="text" name="nom">

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom">

        <label for="adresseF">Adresse de Facturation</label>
        <input type="text" name="adresseF">

        <label for="photoId">Photo d'identité</label>
        <input type="file" name="photoId">
        <button type="submit" onsubmit="ajoutClient()">Valider</button>
    </form>
</body>

</html>