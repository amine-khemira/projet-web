<?php
require ('Database/DBController.php');
require ('Database/Product.php');
require ('Database/cart.php');
require ('Database/order.php');
require ('Database/user.php');


$db = new DBController();

$user = new user($db);
$product = new Product($db);
$fab= new Product($db);

$product->getData();
$fab->getData($table='fabriquant');
$z1= new Product($db);
$z1->getData();

$Cart = new cart($db);
$order=new order($db);
$product_shuffle = $product->getData();




