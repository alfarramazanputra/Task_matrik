<?php

    $jam = (int)readline("masukan jam: ");
    $menit = (int)readline("masukan menit: "); 
    $detik = (int)readline("masukan detik: ");

    $dj = $jam * 3600;
    $dm = $menit * 60;
    $totaldetik = $jam * 3600 + $menit * 60 + $detik;

    echo"$totaldetik totaldetik";

?>