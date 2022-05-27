<?php

class Food extends Products{
    use first_trait;
    function __construct(Int $price, Int $quantity, String $title, String $description, Array $category, String $image, Int $weight)
    {
        parent::__construct($price, $quantity, $title, $description, $category, $image);
        $this->weight = $weight;
    }
}