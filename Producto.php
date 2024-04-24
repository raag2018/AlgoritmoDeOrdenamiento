<?php
// Definimos una clase Producto para representar cada producto
class Producto {
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}

// Función para ordenar la lista de productos por precio utilizando QuickSort
function quickSortProductos($productos) {
    // Si el tamaño de la lista es 0 o 1, ya está ordenada
    $length = count($productos);
    if ($length <= 1) {
        return $productos;
    }
    
    // Selección del pivote (usaremos el primer producto)
    $pivot = $productos[0];
    
    // Inicializamos arrays para los productos menores y mayores que el pivote
    $menores = $mayores = array();
    
    // Partición: dividir la lista de productos en dos sublistas
    for ($i = 1; $i < $length; $i++) {
        if ($productos[$i]->precio < $pivot->precio) {
            $menores[] = $productos[$i];
        } else {
            $mayores[] = $productos[$i];
        }
    }
    
    // Ordenar recursivamente los subarrays menores y mayores
    $menoresOrdenados = quickSortProductos($menores);
    $mayoresOrdenados = quickSortProductos($mayores);
    
    // Combinar los subarrays ordenados junto con el pivote
    return array_merge($menoresOrdenados, array($pivot), $mayoresOrdenados);
}

// Ejemplo de uso
$productos = array(
    new Producto("Camisa", 25),
    new Producto("Pantalón", 30),
    new Producto("Zapatos", 50),
    new Producto("Bufanda", 15)
);

echo "Lista de Productos antes de ordenar:<br>";
foreach ($productos as $producto) {
    echo $producto->nombre . ": $" . $producto->precio . "<br>";
}

$productosOrdenados = quickSortProductos($productos);

echo "<br>Lista de Productos ordenada por precio:<br>";
foreach ($productosOrdenados as $producto) {
    echo $producto->nombre . ": $" . $producto->precio . "<br>";
}
?>