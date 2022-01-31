<?php
class User {
    protected $nome;
    protected $cognome;
    protected $email;
    protected $sconto = 0;

    // Costruttore
    public function __construct($_nome, $_cognome)
    {
       $this->setNome($_nome);
       $this->cognome = $_cognome;
    }

    public function setNome($_nome) 
    {
        if( strlen($_nome) < 5 ) {
            throw new Exception("il nome deve essere più lungo di 4 caratteri");
        }
        $this->nome = $_nome;
    }
    public function getNome() 
    {
        return $this->nome;
    }

    public function setCognome($_cognome)
    {
        $this->cognome = $_cognome;
    }
    public function getCognome()
    {
        return $this->cognome;
    }

    public function setEmail($_email)
    {
        $this->email = $_email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setSconto($_eta){ 
        if(!is_int($_eta)) {
            throw new Exception("L'èta non è un numero!");
        }
        if($_eta > 65) {
            $this->sconto = 40;
        }
    }
    public function getSconto() { 
        return $this->sconto;
    }

    public function getNomeCompleto()
    {
        return "{$this->nome} {$this->cognome}";
    }
}