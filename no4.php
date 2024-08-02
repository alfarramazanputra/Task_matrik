<?php

    $totaldetik = (int)readline("masukan detik: ");
    $jam = floor($totaldetik / 3600);
    $sisadetik = $totaldetik %3600;
    $menit = floor($sisadetik / 60);
    $detik = $totaldetik % 60;

    echo "$jam jam $menit menit $detik detik";

?>