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