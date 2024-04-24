<?php
// Función de búsqueda binaria
function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        // Comprueba si el elemento medio es el objetivo
        if ($arr[$mid] == $target) {
            return $mid;
        }
        // Si el objetivo está en la mitad inferior, ajusta el rango a la izquierda
        if ($arr[$mid] < $target) {
            $left = $mid + 1;
        }
        // Si el objetivo está en la mitad superior, ajusta el rango a la derecha
        else {
            $right = $mid - 1;
        }
    }
    // Si no se encuentra el objetivo, devuelve -1
    return -1;
}
// Ejemplo de uso
$sortedArray = array(2, 5, 8, 12, 16, 23, 38, 56, 72, 91);
$targetElement = 23;
$result = binarySearch($sortedArray, $targetElement);
if ($result != -1) {
    echo "El elemento $targetElement se encuentra en el índice $result.";
} else {
    echo "El elemento $targetElement no se encuentra en el arreglo.";
}
?>