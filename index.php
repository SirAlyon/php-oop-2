<?php

class Products {
    public $price;
    public $quantity;
    public $title;
    public $description;

    function __construct($price, $quantity, $title, $description)
    {
        $this->price = $price;
        $this->quantity = $quantity;
        $this->title = $title;
        $this->description = $description;



    }
}

?>