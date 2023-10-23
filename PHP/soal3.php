<?php

//Salsa dan Shofy
//XI RPL 1

    $nilai = 80;

    if($nilai =="abc"){
        echo("Maaf inputan harus angka");
    }
    if($nilai > 100){
        echo("Maaf inputan Anda melebihi batas!");
    }

    else if($nilai > 89){
        echo("A+");
    }else if($nilai > 79){
        echo("A");
    }else if($nilai > 69){
        echo("B+");
    }else if($nilai > 59){
        echo("B");
    }else if($nilai > 49){
        echo("C");
    }else if($nilai > 0){
        echo("E");
    }else if($nilai < 0){
        echo("Error");
    }