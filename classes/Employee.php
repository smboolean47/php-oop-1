<?php
require_once __DIR__ . "/../traits/Position.php";

class Employee extends User {
    private $livello;

    use Position;

    // Costruttore
    public function __construct($_nome, $_cognome, $_livello)
    {
        parent::__construct($_nome, $_cognome);
        $this->livello =  $_livello;
    }

    public function setLivello($_livello)
    {
        $this->livello = $_livello;
    }
    public function getLivello()
    {
        return $this->livello;
    }
    public function setSconto($_eta){ 
        if($_eta > 65) {
            $this->sconto = 50;
        } else {
            $this->sconto = $this->livello * 10;
        }
    }
}