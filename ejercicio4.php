<?php

// Crear un array indexado de frutas
$frutas = ["Manzana", "Naranja", "Banana", "Uva"];

// Recorrer e imprimir cada fruta separada por una coma
echo "Frutas disponibles:\n";
echo implode(", ", $frutas);

echo "\n\n";

// Crear un array asociativo del producto (mi fruta favorita es la manzana)
$producto = [
    "nombre" => "Pera",
    "precio" => 2.50,
    "stock" => 50
];

// Imprimir los detalles del producto
echo "Detalles de mi fruta favorita:\n";
echo "Nombre: " . $producto["nombre"] . "\n";
echo "Precio: $" . $producto["precio"] . "\n";
echo "Stock: " . $producto["stock"] . " unidades\n";

?>