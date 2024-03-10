<?php
$product_shuffle = $product->getData();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $Cart->addToCart($_POST['id_user'],$_POST['id_produit'],$_POST['id_fab']);




}
?>

<section id="catalogue">
    <div class="container p-2">
        <div class="grid">
            <?php foreach ($product_shuffle as $item):?>
            <div class="grid-item border <?php echo $item['categorie'];?>">
                <div class="item" style="width: 200px;">
                    <div class="product font-Roboto">
                        <a href="product.php?item_id=1"><img src="<?php echo $item['image_produit'] ?? './assets/product/argile.jpg'; ?>" alt="product1" class="img-fluid"></a>
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
                                <input type="hidden" name="id_user" value="<?php echo $_SESSION["userID"];?>">
                                <input type="hidden" name="id_fab" value="<?php echo $item['id_fab'] ?? '0' ?>">
                                <?php
                                if(in_array($item['id_produit'],$Cart->getCartid($product->getData("panier"))??[])){
                                    echo  '<button type="submit" disabled class="btn color-secondalt-bg font-size-14 text-white font-Roboto">Dans le panier</button>';

                                }else{
                                    echo  '<button type="submit" name="top_sale_submit" class="btn color-primaryalt-bg font-size-14 text-white font-Roboto">Ajouter au panier</button>';
                                }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>