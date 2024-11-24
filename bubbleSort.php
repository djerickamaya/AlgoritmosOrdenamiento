<?php
// Función para realizar Bubble Sort en orden descendente
function bubbleSortDes(&$arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambia los elementos si están en el orden incorrecto
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Lista de números a ordenar
$lista = [9, -3, 15, 21, -9, 15, 0, -23, 8, 0, -5, 7, 4, -3];

// Mostrar la lista antes de ordenar
echo "Lista antes de ordenar:\n";
print_r($lista);

// Ordenar la lista usando Bubble Sort en orden descendente
bubbleSortDes($lista);

// Mostrar la lista después de ordenar
echo "Lista después de ordenar:\n";
print_r($lista);
