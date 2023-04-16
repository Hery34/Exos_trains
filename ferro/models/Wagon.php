<?php

class Wagon {
    public $numero;
    public $type;
    public $capaciteMax;
    public $capacite;
    public $position;

    public function __construct($n,$t,$cm,$c,$p)
    {
        $this->numero = $n;
        $this->type = $t;
        $this->capaciteMax = $cm;
        $this->capacite = $c;
        $this->position = $p;
        
    }

    public function chargeWagon($marchandise, $capaciteMax, $nom) {
        $this->capacite = $this->capaciteMax - $marchandise;
        echo "<p>Il reste ".$this->capacite." après le chargement de ".$marchandise." de la commande de ".$nom."</p>";
        $_SESSION['wagon']= $this;
        // var_dump($_SESSION['wagon']);
    }

    public function afficheCharge() {
        
    }
    public function affichePosition(){
        return $this->position;
    }
}