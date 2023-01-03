<?php


abstract class Korisnici{

    protected $ime;
    protected $prezime;
    protected $email;
    protected $telefon;
    protected$tip;
public function __construct($ime,$prezime,$email,$telefon,$tip)
{
    $this->ime =$ime;
    $this->prezime =$prezime;
    $this->email = $email;
    $this->telefon = $telefon;
    $this->tip = $tip;
}

     abstract public function getIme();
    abstract public function setIme($imeKorisnika);

    abstract public function getPrezime();
    abstract public function setPrezime($prezimeKorisnika);
    abstract public function getEmail();
    abstract public function setEmail($emailKorinika);
    abstract public function getTelefon();
    abstract public function setTelefon($telefonKorisnika);
    abstract public function getTip();
    abstract public function setTip($tipKorisnika);
    
}








?>