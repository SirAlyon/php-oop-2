<?php
trait first_trait {
    public function dump($something) {
        var_dump($this->$something);
    }
    public function getFullInfo($v1, $v2, $v3)
    {
        var_dump($this->$v1, $this->$v2, $this->$v3);
    }
}

class Products {
    use first_trait;

    public $price;
    public $final_price;
    public $quantity;
    public $title;
    public $description;
    public $category;
    public $image;
    
    function __construct(Int $price, Int $quantity, String $title, String $description, Array $category, String $image, Int $discount = 0)
    {
        $this->price = $price;
        $this->final_price = $price;
        $this->quantity = $quantity;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->image = $image;
        $this->discount = $discount;
    }
    public function setDiscount($user)
    {
        
        $this->checkUser($user);
        $this->discount = 20;
        $this->getFinalPrice();
        
    }

    public function getFinalPrice()
    {
        $this->final_price = $this->price - ($this->price * $this->discount / 100);
    }

    public function checkUser($user)
    {
        var_dump('im working :)');
        if (!$user || gettype($user) != 'object'){
            throw new Exception('user is null or not an object');
        }
        return;
    }

}

