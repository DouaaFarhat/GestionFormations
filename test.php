<?php
echo "Hello, World !\n";
define("name","Douaa");
echo"my name is:".name."<br>";
$tab=array("Développement web","Réseaux","Sécurité","Bases de données");
echo"<h4>Parcourir et afficahge avec la boucle foreach:</h4><br>";
foreach($tab as $key=>$value ){
    echo $key." : ".$value."<br>";
    }
$i=0;
echo"<h4>Parcourir et afficahge avec la boucle while:</h4><br>";
while($i< count($tab)){
    echo $tab[$i]."<br>";
    $i++;
    }
 echo"<h4>Parcourir et afficahge avec la boucle for:</h4><br>";
for ( $i=0;$i< count($tab);$i++){
    echo $tab[$i]."<br>";
    }
echo"<h4>Tableau associatif:</h4><br>";
$user=[
    "nom"=>"Douaa",
    "prénom"=>"Farhat",
    "age"=>"20"];
    echo $user["nom"]."<br>";
    echo $user["prénom"]."<br>";
    echo $user["age"]."<br>";
$formations = ["Développement Web", "Réseaux", "Sécurité", "Base de données"];
foreach ($formations as $formation) {
echo $formation . "<br>";
}
$formations = [
["nom" => "Développement Web", "duree" => "3 mois"],
["nom" => "Réseaux", "duree" => "2 mois"],
["nom" => "Sécurité", "duree" => "4 mois"]
];
foreach ($formations as $f) {
echo "Formation : " . $f["nom"] .
" - Durée : " . $f["duree"] . "<br>";
$utilisateur = [
"nom" => "Farhat",
"prenom" => "Douaa",
"email" => "douaa.farhat@edu.isetcom.tn.com",
"formation" => "Développement Web",
"Age"=> "20",
];
echo "Nom : " . $utilisateur["nom"] . "<br>";
echo "Prénom : " . $utilisateur["prenom"] . "<br>";
echo "Email : " . $utilisateur["email"] . "<br>";
echo "Formation : " . $utilisateur["formation"];
}
?>