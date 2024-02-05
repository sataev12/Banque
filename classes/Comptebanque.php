<?php

class Comptebanque {
    protected string $libelle;
    protected float $soldeInitiale;
    protected string $devise;
    private Titulaire $titulaireUnique;

    public function __construct(string $libelle, float $soldeInitiale, string $devise, Titulaire $titulaireUnique)
    {
        $this->libelle = $libelle;
        $this->soldeInitiale = $soldeInitiale;
        $this->devise = $devise;
        $this->titulaireUnique = $titulaireUnique;

        
    }

    

    

    
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
    public function getSoldeInitiale()
    {
        return $this->soldeInitiale;
    }
    public function setSoldeInitiale($soldeInitiale)
    {
        $this->soldeInitiale = $soldeInitiale;

        return $this;
    }
    public function getDevise()
    {
        return $this->devise;
    }
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }
    public function getTitulaireUnique()
    {
        return $this->titulaireUnique;
    }
    public function setTitulaireUnique($titulaireUnique)
    {
        $this->titulaireUnique = $titulaireUnique;

        return $this;
    }

    public function __toString()
    {
        return $this->libelle;
    }

    public function crediter($montant){
        $this->soldeInitiale += $montant;
        echo "Le compte a été crédité de {$montant} {$this->devise}. Nouveau solde : {$this->soldeInitiale} {$this->devise}<br>";
    }

    public function debiter($montant) {
        if($montant <= $this->soldeInitiale) {
            $this->soldeInitiale -= $montant;
            echo "Le compte a été débité de {$montant} {$this->devise}. Nouveau solde : {$this->soldeInitiale} {$this->devise}<br>";
        }else{
            echo "solde insuffisant pour effectuer le débit.<br>";
        }
    }

    public function virementVersUnAutreCompte($LivretA, $montant) {
        if($montant <=$this->soldeInitiale){
            $this->soldeInitiale -= $montant;
            $LivretA->soldeInitiale += $montant;
            echo "Virement de {$montant} {$this->devise} vers le Livret A effectué. <br>";
        }else {
            echo "Solde insuffisant pour effectuer le virement . <br>";
        }
    }

    public function afficherInfo(){
        echo "Libellé : ". $this . "<br>";
        echo "Solde Initial : {$this->soldeInitiale} {$this->devise}<br>";
        echo "Titulaire : {$this->titulaireUnique}<br>";
    }

   
}