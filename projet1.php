<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
echo "<b>les donnees de votre formulaire sont:</b><br>";
echo "<b>Nom:</b>".$nom."<b>,prenom:</b>".$prenom."<br>";
$dip=$_POST["diplome"];
if($dip=="l"){
    echo"<b>vous etes en licence</b>";}
elseif($dip=="m") {
    echo"<b>vous etes en master</b>";}
else{
    echo"<b>vous etes en doctorat</b>"; }

?>