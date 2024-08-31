<?php
// Pedir al usuario que ingrese un número
echo "Ingrese un número: ";
$numero = fgets(STDIN);

// Mostrar los números pares desde 1 hasta el número ingresado
for ($i = 1; $i <= $numero; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
?>
