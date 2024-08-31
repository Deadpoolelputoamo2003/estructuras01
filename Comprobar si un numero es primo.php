<?php
$numero = 7; 
$esPrimo = true;

if ($numero <= 1) {
    $esPrimo = false;
} else {

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}

if ($esPrimo) {
    echo "$numero es un número primo.\n";
} else {
    echo "$numero no es un número primo.\n";
}
?>
