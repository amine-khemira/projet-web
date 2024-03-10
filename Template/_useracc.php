<?php


$userr=array();

if(isset($_SESSION['userID'])){
    $userr=$user->get_user_info($_SESSION['userID']);
}

?>
<div class="bg-image " style="
    background-image: url('./assets/img.jpg');
    background-repeat: no-repeat;
    background-size: cover;


  ">
<div class="container py-5 shadow-lg">
    <div class="card-body text-center color-secondalt-bg shadow">
        <h1 class="card-title font-Lora text-white">Bienvenue sur votre espace client</h1>
        <p class="card-text font-Roboto text-white"><?php echo $userr['nom_user'];?>,<?php echo $userr['prenom_user'];?></p>
    </div>
   <div class="color-secondalt-bg nav nav-fills">
    <button class="btn color-second-bg font-Robot text-white" style="width: 25%; margin:0px;">Commandes non validées</button>
    <button class="btn color-second-bg font-Robot text-white" style="width: 25%; margin:0px;">Commandes validées</button>
    <button class="btn color-second-bg font-Robot text-white" style="width: 25%; margin:0px;">Commandes livrées</button>
    <button class="btn color-second-bg font-Robot text-white" style="width: 25%; margin:0px;">Tous les commandes</button>
   </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom du produit</th>
                <th scope="col">Fabriquant</th>
                <th scope="col">Prix</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($product->getData2('commande') as $item):
                $row=$item;
                $cart=$product->getProduct($item['id_produit']);
                $subtotal[]=array_map(function ($item)use($row){
            ?>
            <tr>
                <th scope="row"><?php echo $row['id_commande']?> </th>
                <td><?php echo $item['nom_produit']?></td>
                <td><?php echo $item['nom_fab']?></td>
                <td><?php echo $item['Prix_produit']?></td>
                <td><?php echo $row['date']?></td>
                <?php
                if($row['status']==0){
                    echo '<td><button type="button" disabled class="btn btn-warning " style="width: 80%;">Non-Validée</button></td>';
                }elseif ($row['status']==1){
                    echo '<td><button type="button" disabled class="btn btn-info" style="width: 80%;">Validée</button></td>';

                }else{
                    echo '<td><button type="button" disabled class="btn btn-success" style="width: 80%;">Livrée</button></td>';
                }
                ?>
            </tr>
                    <?php
                    return $item['Prix_produit'];
                },$cart);
            endforeach;
            ?>


            </tbody>
        </table>

    </div>
    <!-- Large modal -->
</div>
</div>

