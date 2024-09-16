<?php

require_once 'Product.php';

class CarProduct implements Product {
    public function create() {
        return "Se ha creado un nuevo automóvil.";
    }
}
