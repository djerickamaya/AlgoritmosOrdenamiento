<?php
// Función Merge Sort
function mergeSort(&$arr)
{
    if (count($arr) > 1) {
        $mid = count($arr) / 2;
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);

        // Recursivamente dividir el array
        mergeSort($left);
        mergeSort($right);

        // Fusionar los arrays ordenados
        $i = 0;
        $j = 0;
        $k = 0;
        while ($i < count($left) && $j < count($right)) {
            if ($left[$i] < $right[$j]) {
                $arr[$k] = $left[$i];
                $i++;
            } else {
                $arr[$k] = $right[$j];
                $j++;
            }
            $k++;
        }

        // Copiar los elementos restantes de $left
        while ($i < count($left)) {
            $arr[$k] = $left[$i];
            $i++;
            $k++;
        }

        // Copiar los elementos restantes de $right
        while ($j < count($right)) {
            $arr[$k] = $right[$j];
            $j++;
            $k++;
        }
    }
}

// Lista de palabras a ordenar
$lista = ["martirio", "barco", "toronja", "huracan", "rata", "casa", "agua", "montaña", "tormenta"];

// Mostrar la lista antes de ordenar
echo "Lista antes de ordenar:\n";
print_r($lista);

// Ordenar la lista usando Merge Sort
mergeSort($lista);

// Mostrar la lista después de ordenar
echo "Lista después de ordenar:\n";
print_r($lista);
