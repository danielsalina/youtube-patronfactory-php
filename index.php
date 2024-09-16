<?php

require_once 'src/ProductFactory.php';

try {
    $factory = new ProductFactory();

    // Crear un automóvil
    $car = $factory->createProduct('car');
    echo $car->create(); // "Se ha creado un nuevo automóvil."

    echo "\n"; // Salto de línea para separar

    // Crear una bicicleta
    $bike = $factory->createProduct('bike');
    echo $bike->create(); // "Se ha creado una nueva bicicleta."

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
