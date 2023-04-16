<?php   

class Marchandise {
    public $nature;
    public $unite;
    public $quantite;

    public function __construct($n,$u,$q)
    {
        $this->nature = $n;
        $this->unite = $u;
        $this->quantite = $q;
    }
//fonction magique qui découpe directement les arguments d'un objet
    public Function  __toString()
    {
       return $this->quantite." ".$this->unite." de ".$this->nature;
    }
}