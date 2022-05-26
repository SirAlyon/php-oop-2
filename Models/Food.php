<?php

class Food extends Products{
    function __construct(Int $price, Int $quantity, String $title, String $description, Array $category, String $image, Int $heigth)
    {
        parent::__construct($price, $quantity, $title, $description, $category, $image);
        $this->heigth = $heigth;
    }
}