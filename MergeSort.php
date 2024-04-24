<?php
function mergeSort(&$arr) {
    $n = count($arr);
    if ($n > 1) {
        $mid = (int) ($n / 2);
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);
        
        mergeSort($left);
        mergeSort($right);
        
        $i = $j = $k = 0;
        
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
        
        while ($i < count($left)) {
            $arr[$k] = $left[$i];
            $i++;
            $k++;
        }
        
        while ($j < count($right)) {
            $arr[$k] = $right[$j];
            $j++;
            $k++;
        }
    }
}

// Lista de palabras de ejemplo
$words = array("banana", "apple", "orange", "grape", "kiwi");

// Mostrar la lista original
echo "Lista original: " . implode(", ", $words) . "\n";

// Ordenar la lista utilizando Merge Sort
mergeSort($words);

// Mostrar la lista ordenada
echo "Lista ordenada alfabéticamente: " . implode(", ", $words) . "\n";
?>