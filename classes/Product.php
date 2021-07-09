<?php 

class Product {
    public $prodName;
    public $price;
    public $description;
    public $discount;
    public $lastPrice;

    function __construct(
                $prodName,
                $price = 0,
                $description = "There it is Description",
                $discount = 0,
                $lastPrice
                ){
        $this->prodName = $prodName;
        $this->price = $price;
        $this->description = $description;
        $this->discount = $discount;
        $this->lastPrice = $lastPrice;

    }
} 

echo "Questo è Product" . "<br>";


echo "<hr>";