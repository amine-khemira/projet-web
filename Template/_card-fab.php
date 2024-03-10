<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData('fabriquant') as $item):
if($item['id_fab']==$item_id):

?>

<div class="card  text-white">
    <img src="<?php echo $item['cov_fab']?>" class="card-img" alt="fab1">
    <div class="card-img-overlay color-second-bg h-25" style="opacity: 0.9; overflow-y: scroll;">
        <h3 class="card-title font-Serif" ><?php echo $item['nom_fab']?></h3>
            <p class="card-text font-Roboto">Fournisseur de produits de beauté</p>
            <p class="card-text font-Roboto"><i class="fa-solid fa-location-dot"></i> <?php echo $item['adresse_fab']?> &nbsp; <i class="fa-solid fa-phone"></i> <?php echo $item['num_fab']?></p>
    </div>
</div>
<div class="text-center m-3">
    <h4 class="font-Serif text-center">Description:</h4>
    <p class="font-Roboto font-size-18"><?php echo $item['desc_fab']?> </p>
</div>
<?php
endif;
endforeach; ?>