<?php
/*
// no 4
    function perkenalan() {
        echo "Assalamualaikum, ";
        echo "Perkenalkan, nama saya Charel <br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    //memanggil fungsi yang sudah dibuat
    perkenalan();*/


// Soal 5
/*   function perkenalan($nama, $salam) {
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    //memanggil fungsi yang sudah dibuat
    perkenalan("Charel", "Hallo");

    echo"<hr>";

    $saya = "Charel";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi
    perkenalan($saya,$ucapanSalam);*/


//Soal 6
//membuat fungsi
   function perkenalan($nama, $salam = "Assalamualaikum"){
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    //memanggil fungsi yang sudah dibuat
    perkenalan("Charel", "Hallo");
    
    echo"<hr>";

    $saya = "Charel";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi tanpa mengisi parameter salam
    perkenalan($saya);
    
?>