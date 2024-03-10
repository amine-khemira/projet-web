<?php
require ('../Database/DBController.php');
require ('../Database/Product.php');
require ('../Database/order.php');

$db = new DBController();
$product=new Product($db);
$order=new order($db);

if(isset($_POST['id_item'])) {
    $result = $product->getProduct2($_POST['id_item']);
    echo json_encode($result);

}


