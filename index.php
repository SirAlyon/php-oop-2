<?php
include __DIR__ . '/Models/Products.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Kennel.php';
include __DIR__ . '/Models/User.php';



$active_user = null;

$products = [
    new Food(50, 100, 'Crocchette Pesce e Patate', 'Lorem ipsum dolor sit amet.', ['dog'], 'https://picsum.photos/400', 14),
    new Food(25, 100, 'Crocchette Pollo', 'Lorem ipsum dolor sit amet.', ['cat'], 'https://picsum.photos/400', 8),
    new Food(25, 15, 'Crocchette Tacchino', 'Lorem ipsum dolor sit amet.', ['dog'], 'https://picsum.photos/400', 2),


    new Kennel(200, 100, 'Kennel Integrale', 'Kennel integrale per cani taglia XL', ['dog'], 'https://picsum.photos/400', 'Kennel', 'XL', 10),
    new Kennel(100, 110, 'Kennel Semi Integrate', 'Kennel semi integrale', ['dog'], 'https://picsum.photos/400', 'Kennel Semi', 'M', 15),

];



$active_user = new User('SirAlyon', 'Alessio', 'Sada', 'alessiosada04@gmai.com', '234242341', 'Viale Virgilio', 1234123412431234, '12/22', 131, false);
//Commenta riga 18 per verificare l'Exception

 foreach ($products as $product) {
    try {
        $product->setDiscount($active_user);;
    } catch (InvalidArgumentException $e) {
        echo 'ERROR:' . $e->getMessage() .' ' .'line:' .$e->getLine(); //ciclando mostra un erorre per ogni prodotto non trovato
    }
}; 



if ($active_user){
    $active_user->setPaymentExpired();
}

//var_dump($products, $active_user);


//uso il trait 
foreach ($products as $product){
    //$product->dump('title');
    $product->getFullInfo('title', 'description', 'price');
}

include __DIR__ . '/Layout/head.php';
include __DIR__ . '/Layout/main.php';
include __DIR__ . '/Layout/foot.php';



