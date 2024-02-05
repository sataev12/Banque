<?php

class Titulaire {
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateDeNaissance;
    protected string $ville;
    protected array $ensembleCompteBanquaire = [];

    public function __construct(string $nom, string $prenom, $dateDeNaissance, string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
        $this->ville = $ville;
    }

    
    



    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }
    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
    public function getEnsembleCompteBanquaire()
    {
        return $this->ensembleCompteBanquaire;
    }
    public function setEnsembleCompteBanquaire($ensembleCompteBanquaire)
    {
        $this->ensembleCompteBanquaire = $ensembleCompteBanquaire;

        return $this;
    }


    public function __toString()
    {
        return "{$this->nom}" . ' ' . "{$this->prenom}";
    }

    public function ajouterCompte($ensembleCompteBanquaire){
        $this->ensembleCompteBanquaire[] = $ensembleCompteBanquaire;
    }

    public function calculerAge(){
        $aujourdhui = new DateTime();
        $differance = $this->dateDeNaissance->diff($aujourdhui);

        return $differance->y;

    }

    public function afficherInformations() {
        echo "{$this}<br>";
        echo "Date de naissance : {$this->dateDeNaissance->format('Y-m-d')}<br>";
        echo "Ville: {$this->ville}<br>";
        echo "Age :" . $this->calculerAge() . " ans<br>";
    }
    
}