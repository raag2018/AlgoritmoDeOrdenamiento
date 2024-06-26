<?php
function insertionSort(&$arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
}

// Lista de nombres de ejemplo
$names = ["John", "Emma", "Robert", "Alice", "Michael"];

// Mostrar la lista original
echo "Lista original: " . implode(", ", $names) . "\n";

// Ordenar la lista utilizando Insertion Sort
insertionSort($names);

// Mostrar la lista ordenada
echo "Lista ordenada alfabéticamente: " . implode(", ", $names) . "\n";
?>