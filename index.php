<?php
$active_user = null;
include __DIR__ .'/Models/Products.php';
include __DIR__ .'/Models/Food.php';
include __DIR__ .'/Models/Kennel.php';
include __DIR__ .'/Models/User.php';

$products = [
    new Food(50, 100, 'Crocchette Pesce e Patate', 'Lorem', ['dog'], 'https://picsum.photos/200/300', 14),
    new Kennel(200, 100, 'Kennel Integrale', 'Lorem', ['dog'], 'https://picsum.photos/200/300', 'Kennel', 'XL', 10),
];

//$actual_date = date();
var_dump(date("Y"), date("m"));


$active_user = new User('SirAlyon', 'Alessio', 'Sada', 'alessiosada04@gmai.com', '234242341', 'Viale Virgilio', 1234123412431234, '12/22', 131, false);


foreach($products as $product){
    $product->setDiscount($active_user);
};

var_dump($products, $active_user);

var_dump($active_user->setPaymentExpired())

?>
