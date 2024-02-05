
<?php

spl_autoload_register(function($class_name){
    require 'classes/'. $class_name . '.php';
});


//$banqueCompte = new Comptebanque("CompteCourant", 100.5, 'EUR', $titulaireOne);

//echo $banqueCompte;
// Ensuite, utilisez cette instance pour créer le titulaire
$titulaireOne = new Titulaire("Ansu", "Fati", '1993-11-15', "STRASBOURG");
echo $titulaireOne;
// var_dump($titulaireOne);

