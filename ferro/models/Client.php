<?php

class Client {
    public $civilite;
    public $nom;
    public $prenom;
    public $numero;
    public $email;
    public $adresse;

    public function __construct($ci,$n,$p,$nu,$e,$a,$c)
    {
        $this->civilite = $ci;
        $this->nom = $n;
        $this->prenom = $p;
        $this->numero = $nu;
        $this->email = $e;
        $this->adresse = $a;
    }
    // injection de dépendances en précisant la classe de provenance de l'attribut.
    public function passerCommande(Marchandise $marchandise, Gare $gareDep, Gare $gareArr,$dateClient) {
        echo $this->civilite." ".$this->nom." veut transporter ".$marchandise." de ".$gareDep->ville." vers ".$gareArr->ville." pour le ".$dateClient;
        $_SESSION['commande']=['client'=>$this, 'marchandise'=>$marchandise,'dep'=>$gareDep,'arr'=>$gareArr, 'dateClient'=>$dateClient]; 
    }
}