
<?php

spl_autoload_register(function($class_name){
    require 'classes/'. $class_name . '.php';
});


$titulaireOne = new Titulaire("Ansu", "Fati", '1993-11-15', "STRASBOURG");






$banqueCompte = new Comptebanque("CompteCourant", 100.5, 'EUR', $titulaireOne);
$LivretA = new ComptelivretA("Livret A", 500.0, "EUR", $titulaireOne);

//Ajout des compte pour un titulaire
// $titulaireOne->ajouterCompte($banqueCompte);
// $titulaireOne->ajouterCompte($LivretA);
//Affiche Info
$titulaireOne->afficherInformations();


$banqueCompte->afficherInfo();
$banqueCompte->crediter(50.0);
//Pour effectuer un virement
echo "<br>************************************************<br>";
$LivretA->virementVersUnAutreCompte($banqueCompte, 30);
$banqueCompte->afficherInfo();

echo "<br>************************************************<br>";
$LivretA->afficherInfo();
