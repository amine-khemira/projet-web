<?php
$item_id = $_GET['item_id'] ?? 1;
if($_SERVER['REQUEST_METHOD']=="POST"){

    $Cart->addToCart($_POST['id_user'], $_POST['id_produit'], $_POST['id_fab']);
    header("location:panier.php");





}
foreach ($z1->getFab() as $item):
    if($item['id_produit']==$item_id):

?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['image_produit'] ?? "pp"; ?>" alt="product1" class="img-fluid">
            </div>
            <div class="col-sm-6  p-0 shadow">
                <h2 class="font-Serif p-2"><?php echo $item ['nom_produit'] ?? "unknown";?></h2>
                <div class="rating text-dark font-size-18 d-flex p-2 color-third-bg">
                    <h4 class="font-Roboto font-size-24 mr-2 text-dark">Note: </h4>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-regular fa-star"></i></span>
                </div>
                <div class="color-secondalt-bg d-flex">
                    <img src="<?php echo $item['image_fab'] ?? "pp"; ?>" alt="khomssa" class="img-thumbnail rounded-circle m-2 " style="height: 100px; width: 100px;" >
                    <table class="table table-sm table-borderless p-0 m-0 text-white" style="width: 216.4px;">
                        <tr class="m-0">
                            <td><h6 class="font-Roboto font-size-18 p-0 m-0">Fabriqué par:</h6></td>
                            <td class="p-0"><h6 class="font-Serif font-size-24 p-0 m-0"> <?php echo $item ['nom_fab'] ;?></h6></td>
                        </tr>
                        <tr>
                            <td><span><i class="fa-solid fa-location-dot"></i></span> <?php echo $item ['adresse_fab'] ;?></td>
                        </tr>
                        <tr>
                            <td><span><i class="fa-solid fa-phone"></i> <?php echo $item ['num_fab'] ;?></span></td>
                        </tr>
                    </table>
                </div>
                <div class="p-4 font-Roboto font-size-24 d-flex">
                    <h3 class="color-secondalt">Prix:</h3><?php echo $item['Prix_produit']; ?>DT
                </div>
                <hr>
                <div class="qty px-4 font-Roboto font-size-24 d-flex">
                    <h3>Quantité:</h3>
                    <div class="px-4 d-flex font-Nanum">
                        <button class="qty-up border color-secondalt-bg text-white" data-id="<?php $item['id_produit']; ?>"><i class="fa-solid fa-chevron-up"></i></button>
                        <input type="text" class="qty_input border px-2 w-50 bg-light" data-id="<?php $item['id_produit']; ?>" disabled value="1" placeholder="1">
                        <button class="qty-down border color-secondalt-bg text-white" data-id="<?php $item['id_produit']; ?>"><i class="fa-solid fa-chevron-down"></i></button>
                    </div>
                </div>
                <form method="post">
                            <input type="hidden" name="id_produit" value="<?php echo $item['id_produit'] ?? '0' ?>">
                            <input type="hidden" name="id_user" value="<?php echo $_SESSION['userID'];?>">
                            <input type="hidden" name="id_fab" value="<?php echo $item['id_fab'] ?? '0' ?>">
                            <?php
                            if(in_array($item['id_produit'],$Cart->getCartid($product->getData2("panier"))??[])){
                              echo '<button type="submit" disabled class="border-0 px-2 color-secondalt-bg text-white font-Roboto m-4 font-size-24">dans le panier</button>';
                            }else{
                                echo ' <button type="submit" class="border-0 px-2 color-secondalt-bg text-white font-Roboto m-4 font-size-24">Ajouter au panier</button> ';

                            }
                            ?>
                </form>

            </div>
        </div>
    </div>
</section>
<?php
    endif;
    endforeach; ?>