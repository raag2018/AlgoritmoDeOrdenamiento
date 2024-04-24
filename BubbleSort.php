<?php
function bubbleSortDescending($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Swap
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Lista de números de ejemplo
$numbers = array(64, 34, 25, 12, 22, 11, 90);

// Mostrar la lista original
echo "Lista original: " . implode(", ", $numbers) . "\n";

// Ordenar la lista utilizando Bubble Sort descendente
$sortedNumbers = bubbleSortDescending($numbers);

// Mostrar la lista ordenada
echo "Lista ordenada de forma descendente: " . implode(", ", $sortedNumbers) . "\n";
?>