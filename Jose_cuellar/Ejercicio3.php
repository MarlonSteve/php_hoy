<?php
//Hallar el valor de la hipotenusa dados dos catetos

// Obtener los valores de los catetos
$cateto1 = readline("Ingrese el valor del primer cateto: ");
$cateto2 = readline("Ingrese el valor del segundo cateto: ");

// Calcular el valor de la hipotenusa utilizando el teorema de Pitágoras
$cateto1Cuadrado = pow($cateto1, 2);
$cateto2Cuadrado = pow($cateto2, 2);
$sumaCuadrados = $cateto1Cuadrado + $cateto2Cuadrado;
$hipotenusa = sqrt($sumaCuadrados);

// Mostrar el valor de la hipotenusa
if ($hipotenusa > 0) {
    echo "El valor de la hipotenusa es: " . $hipotenusa;
} elseif ($hipotenusa == 0) {
    echo "Los catetos deben ser mayores a cero.";
} else {
    echo "No se puede calcular la hipotenusa con los valores ingresados.";
}

?>