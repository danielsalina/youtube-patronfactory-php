<?php

require_once 'CarProduct.php';
require_once 'BikeProduct.php';

class ProductFactory {

    public function createProduct($type) {
        switch ($type) {
            case 'car':
                return new CarProduct();
            case 'bike':
                return new BikeProduct();
            default:
                throw new Exception("Tipo de producto no soportado.");
        }
    }
}
