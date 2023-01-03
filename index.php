<?php
include "model/Korisnici.php";
include "model/gost.php";
include "model/administrator.php";
include " controler/controler.php";

$gost= new Gost("milan","milic","milance@gmail.com","061235977","gost");
$gost2=new Gost("ljiljana","pupovac","lala@gmail.com","06555577","gost");
$gost3=new Gost("jovan","zivkovic","zika@gmail.com","061234567","gost");
$admin = new Administrator("petar", "glisic", "peca@yahoo.com", "066993344", "admin");

Kontroler::logInKorisnika($admin);
Kontroler::logInKorisnika($gost);
Kontroler::logInKorisnika($gost2);
Kontroler::logInKorisnika($gost3);

$listagostiju = [$gost, $gost2, $gost3];
Kontroler::PrikaziGosta(...$listagostiju);

?> 