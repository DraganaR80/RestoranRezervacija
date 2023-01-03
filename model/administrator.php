<?php

 class Administrator extends Korisnici{
 
    

   

    public function __construct($ime,$prezime,$email,$telefon,$tip)
    {
        parent::__construct($ime, $prezime, $email, $telefon, $tip);
    }
    public  function setIme($ime){
        $this->ime =$ime;
    
       }
    public function getIme(){
        return $this->ime;

    }
   
   public function setPrezime($prezime){
    $this->prezime =$prezime;
}
    public function getPrezime(){
        return $this->prezime ;
    }
    
    public function setEmail($email){
        $this->email = $email;

    }
    public function getEmail(){
          return $this->email;
    }
   
    public function setTelefon($telefon){
        $this->telefon = $telefon;
    }
    public function getTelefon(){
        return $this->telefon ;
    }
    
    public function setTip($tip){
        $this->telefon = $tip;
    }
    public function getTip(){
        return $this->tip ;
    }
   
  


}





?>