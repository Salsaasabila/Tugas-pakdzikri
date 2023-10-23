<?php

//Salsa dan Shofy
//XI RPL 1
 
$umur = 19;
$tiket = 50.000;
$film = "Avengers";

if($umur >= 18 && $tiket ==100.00 && $film =="Avengers"){
    echo "selamat menonton film dengan vip";
}
elseif($umur >= 18 && $tiket ==50.000 && $film =="Avengers"){
    echo "Selamat menonton";
}
elseif($umur >=18 && $tiket ==50.000 && $film =="Avengers"){
    echo "film obseo uih deui weh";
}
elseif($umur < 18){
    echo "anak kicik gak boleh nonton";
}
else{
    echo "film obseo";
}