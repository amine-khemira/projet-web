<?php
if(isset($_SESSION['userID'])){
    $userr=$user->get_user_info($_SESSION['userID']);
    
}
$product_shuffle = $product->getData();
shuffle($product_shuffle);
if($_SERVER['REQUEST_METHOD']=="POST"){

        $Cart->addToCart($_POST['id_user'], $_POST['id_produit'], $_POST['id_fab']);





}
?>
<section id="top-sale">
    <div id="con" class="container py-5">
        <h3 class="font-Serif">Coups de coeur:</h3>
        <hr>
        <!--owl carousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item){?>
            <div class="item">
                <div class="product font-Roboto">
                    <a href="<?php printf('%s?item_id=%s','product.php',$item['id_produit'])?>"><img src="<?php echo $item['image_produit'] ?? './assets/product/argile.jpg';?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h5><?php echo $item['nom_produit'] ?? 'uknown'; ?></h5>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span><?php echo $item['Prix_produit'] ?? '0'; ?></span>DT
                        </div>
                        <form method="post">
                            <input type="hidden" name="id_produit" value="<?php echo $item['id_produit'] ?? '0' ?>">
                            <input type="hidden" name="id_user" value="<?php echo $userr['id_user'];?>">
                            <input type="hidden" name="id_fab" value="<?php echo $item['id_fab'] ?? '0' ?>">
                            <?php
                            if(in_array($item['id_produit'],$Cart->getCartid($product->getData2("panier"))??[])){
                                echo  '<button type="submit" disabled class="btn color-secondalt-bg font-size-14 text-white font-Roboto">Dans le panier</button>';

                            }else{
                                echo  '<button type="submit" name="top_sale_submit" class="btn color-primaryalt-bg font-size-14 text-white font-Roboto">Ajouter au panier</button>';
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!--owl carousel-->
    </div>
</section>