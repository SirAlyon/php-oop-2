<?php

class Kennel extends Products{
    function __construct(Int $price, Int $quantity, String $title, String $description, Array $category, String $image, String $type, String $size, Int $heigth)
    {
        parent::__construct($price, $quantity, $title, $description, $category, $image);
        $this->type = $type;
        $this->size = $size;
        $this->heigth = $heigth;
    }
}
