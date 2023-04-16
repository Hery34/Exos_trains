<?php

class Trajet {
    public $ref;
    public $train;
    public $depart;
    public $arrivee;
    public $gares = [];
    public $horDep;
    public $horArr;
    public $jours = [];

    public function __construct($r,$t,$d,$a,$g,$hd,$ha,$j)
    {
        $this->ref = $r;
        $this->train = $t;
        $this->depart = $d;
        $this->arrivee = $a;
        $this->gares = $g;
        $this->horDep = $hd;
        $this->horArr = $ha;
        $this->jours = $j;
        
    }

}