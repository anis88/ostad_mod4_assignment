<?php

class Product {
    // Properties
    private $id;
    private $name;
    private $price;

    // Constructor
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to get formatted price
    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    // Method to show product details
    public function showDetails() {
        echo "Product Details: \n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: $" . $this->getFormattedPrice() . "\n";
    }
}

// Example usage:
$product = new Product(1, "T-shirt", 19.99);
$product->showDetails();



// class Product {
//     // TODO: Add properties
//     public $id;
//     public $name;
//     public $price;
    
//     public function __construct($idValue, $nameValue, $priceValue) {
//         // TODO: Initialize properties
//         $this -> id = $idValue;
//         $this -> name = $nameValue;
//         $this -> price = $priceValue;

//     }

//     // TODO: Add getFormattedPrice method
//     public function getFormattedPrice(){
//      
//     }


//     // TODO: Add showDetails method
//     public function showDetails(){

//     }
// }

// // Test the Product class
// $product = new Product(1, 'T-shirt', 19.99);
// $product->showDetails();






?>