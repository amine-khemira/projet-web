

<section id="fab">
    <div class="container ">
        <h3 class="font-Serif">Produits:</h3>
        <hr>
        <!--owl carousel-->
        <div class="owl-carousel owl-theme py-5">
            <?php
            foreach ($product->getProduct3($item_id) as $item):
            ?>

            <div class="item">
                <div class="product font-Roboto">
                    <div class="text-center">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['id_produit'])?>"><img src="<?php echo $item['image_produit'] ?? './assets/product/argile.jpg';?>" alt="product1" class="img-fluid"></a>
                        <h5><?php echo $item['nom_produit']?></h5>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span><?php echo $item['Prix_produit']?></span>DT
                        </div>
                        <button type="submit" class="btn color-primaryalt-bg font-size-14 text-white font-Roboto">Ajouter au panier</button>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>

        </div>
        <!--owl carousel-->
    </div>
</section>