<?php

require_once 'Product.php';

class BikeProduct implements Product {
    public function create() {
        return "Se ha creado una nueva bicicleta.";
    }
}
