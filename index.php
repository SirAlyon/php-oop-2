<?php

include __DIR__ .'/Models/Products.php';
include __DIR__ .'/Models/Food.php';
include __DIR__ .'/Models/Kennel.php';
include __DIR__ .'/Models/User.php';




$crocchette_1 = new Food(50, 100, 'Crocchette Pesce e Patate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, maxime ducimus! Neque temporibus iure dignissimos, aliquam fugit harum animi aperiam?', ['dog'], 'https://picsum.photos/200/300', 14);
$kennel_1 = new Kennel(200, 100, 'Kennel Integrale', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, maxime ducimus! Neque temporibus iure dignissimos, aliquam fugit harum animi aperiam?', ['dog'], 'https://picsum.photos/200/300', 'Kennel', 'XL', 10);
$active_user = new User('SirAlyon', 'Alessio', 'Sada', 'alessiosada04@gmai.com', '234242341', 'Viale Virgilio', '1234 1234 1243 1234/12/24/131', false);
var_dump($crocchette_1, $kennel_1, $user_1);

$crocchette_1->setDiscount($active_user);
var_dump($crocchette_1)
?>
