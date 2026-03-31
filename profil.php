<?php
$nom = "Farhat";
$prenom = "Douaa";
$email = "douaa.farhat@edu.isetcom.tn";
$age =21;
$ville ="Monastir";
$formation = "GTIC";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Profil utilisateur</title>
</head>
<body>
    <h1>Profil utilisateur</h1>

    <p><strong>Nom :</strong> <?= $nom ?></p>
    <p><strong>Prénom :</strong> <?= $prenom ?></p>
    <p><strong>Email :</strong> <?= $email ?></p>
    <p><strong>Age :</strong> <?= $age ?></p>
    <p><strong>Ville :</strong> <?= $ville ?></p>
    <p><strong>Formation :</strong> <?= $formation ?></p>
    <p>Bienvenue <?=$prenom?> dans la formation <?= $formation?></p>
</body>
</html>