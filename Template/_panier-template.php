<?php
$arr=$product->getData('panier');


if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete_cart'])){
        $deletedrecord=$Cart->deleteCart($_POST['id_produit']);


    }

}
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h3 class="font-Serif">Panier</h3>
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach($product->getData2('panier') as $item):
                    $cart=$product->getProduct($item['id_produit']);
                    $subtotal[]=array_map(function ($item){
                ?>
                <!--item-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php  echo $item['image_produit'] ?>" style="height:120px ;" alt="cart1" class="img-fluid" >
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-Nanum font-size-24"><?php echo $item['nom_produit'] ?></h5>
                        <small>By <?php echo $item['nom_fab'] ?> </small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                            </div>
                        </div>
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-Roboto w-25" >
                                <button class="qty-up border color-primaryalt-bg text-white" data-id="<?php echo $item['id_produit'] ?>"><i class="fa-solid fa-chevron-up"></i></button>
                                <input type="text" class="qty_input border px-2 w-100 bg-light" data-id="<?php echo $item['id_produit'] ?>" disabled value="1" placeholder="1">
                                <button class="qty-down border color-primaryalt-bg text-white" data-id="<?php echo $item['id_produit'] ?>"><i class="fa-solid fa-chevron-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['id_produit'] ?>" name="id_produit">
                                <button type="submit" name="delete_cart" class="btn font-Roboto text-danger  pw-3 border-right">Suprimer</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="font-size-24 font-Roboto">
                            <span class="product_price" data-id="<?php echo $item['id_produit'] ?>"><?php echo $item['Prix_produit'] ?></span> DT
                        </div>
                    </div>
                </div>
                <?php
                        return $item['Prix_produit'];
                },$cart);
                endforeach;
                ?>

            </div>
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <?php
                    if(count($product->getData2('panier'))>=3){
                        echo '<h6 class="font-Roboto text-success"><i class="fa-solid fa-check"></i> Votre commande est élegible à une livraison gratuite</h6>';
                    }else{
                        echo '<h6 class="font-Roboto text-danger"><i class="fa-solid fa-xmark"></i> Votre commande n \'est pas élegible à une livraison gratuite</h6>';
                    }
                    ?>
                    <div class="border-top py-4">
                        <h5 class="font-Roboto"> Total (<?php echo isset($subtotal)? count($subtotal) : 0;  ?> item)&nbsp;<span class="text-danger" id="deal_price"><?php echo isset($subtotal)? $Cart->getSum($subtotal):0 ?> <span class="text-danger">DT</span></span></h5>


                        <button type="submit" id="confirmer" name="confirmer" class="btn font-Roboto color-secondalt-bg text-white">Passer commande</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

