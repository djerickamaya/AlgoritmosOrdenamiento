<?php
// Función para realizar Insertion Sort en orden alfabético
function insertionSort(&$arr)
{
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        // Mueve los elementos del array que son mayores que la clave
        // a una posición adelante de su posición actual
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
}

// Lista de nombres a ordenar
$lista = ["Tere", "Teodoro", "Margarita", "Donatelo", "Miguel", "Angel", "Rafael", "Eduardo", "Maribel"];

// Mostrar la lista antes de ordenar
echo "Lista antes de ordenar:\n";
print_r($lista);

// Ordenar la lista usando Insertion Sort
insertionSort($lista);

// Mostrar la lista después de ordenar
echo "Lista después de ordenar:\n";
print_r($lista);
