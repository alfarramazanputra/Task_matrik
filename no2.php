<?php

    $bilangan1 = 10;
    $bilangan2 = 20;
    $bilangan3 = 45;

    if ($bilangan1 > $bilangan2 && $bilangan1 > $bilangan3) {
        echo "Bilangan terbesar adalah: " . $bilangan1;
    } elseif ($bilangan2 > $bilangan1 && $bilangan2 > $bilangan3) {
        echo "Bilangan terbesar adalah: " . $bilangan2;
    } else {
        echo "Bilangan terbesar adalah: " . $bilangan3;
    }
    
?>
