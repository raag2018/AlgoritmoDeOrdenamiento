<?php
// Función para QuickSort
function quickSort($array) {
    // Si el tamaño del array es 0 o 1, ya está ordenado
    $length = count($array);
    if ($length <= 1) {
        return $array;
    }
    
    // Selección del pivote (usaremos el primer elemento)
    $pivot = $array[0];
    
    // Inicializamos arrays para los elementos menores y mayores que el pivote
    $menores = $mayores = array();
    
    // Partición: dividir el array en dos subarrays
    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] < $pivot) {
            $menores[] = $array[$i];
        } else {
            $mayores[] = $array[$i];
        }
    }
    
    // Ordenar recursivamente los subarrays menores y mayores
    $menoresOrdenados = quickSort($menores);
    $mayoresOrdenados = quickSort($mayores);
    
    // Combinar los subarrays ordenados junto con el pivote
    return array_merge($menoresOrdenados, array($pivot), $mayoresOrdenados);
}

// Ejemplo de uso
$array = array(5, 3, 7, 2, 8, 4);
echo "Array original: " . implode(", ", $array) . "<br>";
$arrayOrdenado = quickSort($array);
echo "Array ordenado: " . implode(", ", $arrayOrdenado);
?>