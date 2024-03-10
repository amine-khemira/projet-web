<?php
session_start();
require ('./Database/DBController.php');
require ('./Database/Product.php');
require ('./Database/order.php');
require ('Database/cart.php');



$db = new DBController();
$product=new Product($db);
$order=new order($db);
$cart2=new cart($db);
$result=$product->getDatapan('panier');

foreach ($result as $arr ):
    $values = implode(',',array_values($arr));
echo $values;
    $columns = implode(',', array_keys($arr));
    $query_string = sprintf("INSERT INTO commande(%s) VALUES (%s)",$columns, $values);
    $order->db->con->query($query_string);
    $query_string2 = "DELETE FROM panier WHERE `panier`.`id_user` ={$_SESSION["userID"]} ";
    $order->db->con->query($query_string2);
    header("location:compteuser.php");


endforeach;
