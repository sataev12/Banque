
<?php

class ComptelivretA extends Comptebanque{

    public function __construct(string $libelle, float $soldeInitiale, string $devise, Titulaire $titulaireUnique)
    {
        parent::__construct($libelle, $soldeInitiale, $devise, $titulaireUnique);
    }



    public function virementVersUnAutreCompte($banqueCompte, $montant) {
        if($montant <=$this->soldeInitiale){
            $this->soldeInitiale -= $montant;
            $banqueCompte->soldeInitiale += $montant;
            echo "Virement de {$montant} {$this->devise} vers le banqueCompte effectué. <br>";
        }else {
            echo "Solde insuffisant pour effectuer le virement . <br>";
        }
    }
}