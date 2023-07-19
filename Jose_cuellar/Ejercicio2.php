<?php
//Determinar si un aprendiz aprobo la materia dadas 3 notas las materias 
//se aprueban con 3.5, el sistema debera mostrar un mensaje de aprobo, 
//reprobo y el promedio de la materia 

// Obtener las 3 notas del aprendiz
$nota1 = readline("Ingrese la nota 1: ");
$nota2 = readline("Ingrese la nota 2: ");
$nota3 = readline("Ingrese la nota 3: ");

// Calcular el promedio de las notas
$promedio = ($nota1 + $nota2 + $nota3) / 3;

// Determinar si el aprendiz aprobó o reprobó la materia
if ($promedio >= 3.5) {
    echo "Aprobado. Promedio: " . $promedio;
} elseif ($promedio < 3.5) {
    echo "Reprobado. Promedio: " . $promedio;
} else {
    echo "No se puede determinar el resultado";
}

?>