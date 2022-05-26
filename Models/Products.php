<?php
class Products {
    public $price;
    public $quantity;
    public $title;
    public $description;
    public $category;
    public $image;
    

    function __construct(Int $price, Int $quantity, String $title, String $description, Array $category, String $image, Int $discount = 0)
    {
        $this->price = $price;
        $this->quantity = $quantity;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->image = $image;
        $this->discount = $discount;
    }
    public function setDiscount($user)
    {
        if ($user !== null){
            $this->discount = 20;
        }
    }
}