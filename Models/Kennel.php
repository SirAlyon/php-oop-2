<?php

class Kennel extends Products{
    use first_trait;
    function __construct(Int $price, Int $quantity, String $title, String $description, Array $category, String $image, String $type, String $size, Int $weight)
    {
        parent::__construct($price, $quantity, $title, $description, $category, $image);
        $this->type = $type;
        $this->size = $size;
        $this->weight = $weight;
    }
}
