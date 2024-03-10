<?php
$product->getData('fabriquant');
?>
<div class="h1 font-Lora color-secondalt-bg text-center text-white py-3">Nos Artisants</div>
<div class="container bg-light rounded">

    <div class="row">
        <?php
        foreach($product->getData('fabriquant') as $item):
        ?>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="card  text-white my-3">
                <img src="<?php echo $item['image_fab']?>" class="card-img" >
                <div class="card-img-overlay p-0 shadow">
                    <div class=" p-2" style="background-color: rgba(118, 175, 164 , 0.7);">
                    <h3 class="card-title font-Serif"><?php echo $item['nom_fab']?></h3>
                    <p class="card-text font-Roboto"><i class="fa-solid fa-location-dot"></i> <?php echo $item['adresse_fab']?></p>
                    <div class="d-flex">
                        <p class="card-text font-Roboto"><i class="fa-solid fa-phone"></i> <?php echo $item['num_fab']?></p>
                        <a href="<?php printf('%s?item_id=%s','fabriquant.php',$item['id_fab'])?>"><button id="voir" class="btn color-second-bg text-white" style="margin-left: 130px; opacity:0.8"><i class="fa-solid fa-angles-right"></i>Voir plus</button></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        endforeach;
        ?>


    </div>
</div>
