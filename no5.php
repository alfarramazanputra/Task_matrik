<?php
    $i = (int)readline("masukan angka: ");
    while ($i <= 50) {
        if ($i % 2 == 0) {
            echo "|$i bilangan genap| ";
        } else {
            echo "|$i bilangan ganjil| ";
        }
        $i++;
    }
?>