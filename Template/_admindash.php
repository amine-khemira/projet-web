<?php


$userr=array();


if(isset($_SESSION['userID'])){
    $userr=$user->get_user_info($_SESSION['userID']);
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    $q="UPDATE `commande` SET `status` = `status`+1 WHERE `commande`.`id_commande` = {$_POST['id_commande']}";
    $db = new DBController();
    $product = new Product($db);
    $product->db->con->query($q);



}

?>

<div class="bg-image " style="
    background-image: url('./assets/bgn.jpg');
    background-repeat: no-repeat;
    background-size: cover;


  ">
<div class="container py-2">
    <div class="card-body text-center color-secondalt-bg">
        <h1 class="card-title font-Serif text-white"><?php echo $userr["nom_user"]; ?></h1>
        <p class="card-text text-white">Liste des commandes associées à vous:</p>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Nom produit</th>
                <th scope="col">Prix produit</th>
                <th scope="col">Adresse client</th>
                <th scope="col">date</th>
                <th scope="col">status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($product->getData3('commande',$userr['id_fab']) as $item):
            $row=$item;
            $result=$product->getData4('user',$item['id_user']);
            $cart=$product->getProduct($item['id_produit']);
            $subtotal[]=array_map(function ($item)use($row,$result){
            ?>
            <tr class="text-center">
                <th scope="row"><?php echo $row['id_commande']?></th>
                <td><?php echo $item['nom_produit']?></td>
                <td><?php echo $item['Prix_produit'];

                return $item['Prix_produit'];
            },$cart);
                $subtotal[]=array_map(function ($item)use($row){
                    ?></td>
                <td><?php echo $item['adresse_user']?></td>
                <td><?php echo $row['date'];?></td>
                    <?php
                    if($row['status']==0){
                        echo '<td><button type="button" disabled class="btn btn-warning" style="width: 100%;">Non-Validée</button> 
                                   <td><form method="post" class="d-flex">
                                         <input type="hidden" name="id_commande" value="' ; echo $row['id_commande'];echo '">';
                                         echo ' <button type="submit" class="btn btn-info text-white mx-2"><i class="fa-solid fa-check"></i></button>
                                   </form></td>
                               </td>';
                    }elseif ($row['status']==1){
                        echo '<td><button type="button" disabled class="btn btn-info" style="width: 100%;">Validée</button> 
                                   <td><form method="post">
                                         <input type="hidden" name="id_commande" value="' ; echo $row['id_commande'];echo '">';
                        echo ' <button type="submit" class="btn btn-success text-white"><i class="fa-solid fa-dolly"></i></button>
                                   </form></td>
                               </td>';
                    }else{
                        echo '<td><button type="button" disabled class="btn btn-success" style="width: 100%;">Livrée</button></td> <td></td>';
                    }

                    ?>
            </tr>
                <?php
                return $item['adresse_user'];
            },$result);
            endforeach;
            ?>

            </tbody>
        </table>
    </div>

</div>
</div>