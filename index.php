
<?php

spl_autoload_register(function($class_name){
    require 'classes/'. $class_name . '.php';
});





$titulaireOne = new Titulaire("Ansu", "Fati", '1993-11-15', "STRASBOURG");


$banqueCompte = new Comptebanque("CompteCourant", 100.5, 'EUR', $titulaireOne);

$banqueCompte->afficherInfo();
echo "<br>                                          <br>";
$LivretA = new ComptelivretA("Livret A", 500.0, "EUR", $titulaireOne);


$banqueCompte->virementVersUnAutreCompte($LivretA, 20.0);
$LivretA->virementVersUnAutreCompte($banqueCompte, 20.0);
$banqueCompte->afficherInfo();