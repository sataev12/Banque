<?php

class Comptebanque {
    protected string $libelle;
    protected float $soldeInitiale = 100;
    protected string $devise;
    protected Titulaire $titulaireUnique;

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
        return $this->soldeInitiale;
        
    }
}