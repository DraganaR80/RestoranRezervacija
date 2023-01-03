<?php 

class Kontroler{

public static function logInkorisnika( Korisnici $korisnici){}


public static function PrikaziGosta (Gost ... $listagostiju){
    foreach($listagostiju as $lg) :
        echo "Rezervacije na ime:" .$lg->getIme();
        endforeach; 



}

}






?>