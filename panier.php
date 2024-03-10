<?php
session_start();
ob_start();
include ('security.php');

//include header.php
include ('header.php');
?>
<?php
include('Template/_panier-template.php');
include('Template/_top-sale.php');
?>
<?php
//include Footer.php
include ('Footer.php')
?>
