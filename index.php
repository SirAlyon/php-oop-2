<?php
include __DIR__ . '/Models/Products.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Kennel.php';
include __DIR__ . '/Models/User.php';

$active_user = null;

$products = [
    new Food(50, 100, 'Crocchette Pesce e Patate', 'Lorem ipsum dolor sit amet.', ['dog'], 'https://picsum.photos/400', 14),
    new Kennel(200, 100, 'Kennel Integrale', 'Kennel integrale per cani taglia XL', ['dog'], 'https://picsum.photos/400', 'Kennel', 'XL', 10),
];

/* $actual_date = date();
var_dump(date("Y"), date("m")); */


//$active_user = new User('SirAlyon', 'Alessio', 'Sada', 'alessiosada04@gmai.com', '234242341', 'Viale Virgilio', 1234123412431234, '12/22', 131, false);
//Commenta riga 18 per verificare l'Exception

foreach ($products as $product) {
    try {
        $product->setDiscount($active_user);;
    } catch (Exception $e) {
        echo 'ERROR:' . $e->getMessage() . $e->getLine(); //ciclando mostra un erorre per ogni prodotto non trovato
    }
};

if ($active_user){
    $active_user->setPaymentExpired();
}




var_dump($products, $active_user);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Assets/style.css">
    <title>Document</title>
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-4">
                        <div class="product">
                            <div class="product-img">
                                <img src=<?= $product->image ?> alt="">
                            </div>
                            <div class="product-body">
                                <h4 class="mt-2"><?= $product->title ?></h4>
                                <div><?= $product->description ?></div>
                                <div>
                                    Category:
                                    <?php foreach ($product->category as $category) : ?>
                                        <span><?= $category ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <div class="price">
                                    <div class="dashed">
                                        $ <?= $product->price ?>
                                    </div>
                                    <div>
                                        $ <?= $product->final_price ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>