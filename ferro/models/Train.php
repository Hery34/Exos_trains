<?php

class Train {
    public $refTrain;
    public $listeWagons = [];
    
    public function __construct($r,$l)
    {
        $this->refTrain = $r;
        $this->listeWagons = $l;
       
    }

}