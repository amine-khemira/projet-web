<?php
session_start();
ob_start();
include ('security.php');
//include header.php
include ('header.php');
?>
<?php
include ('Template/_recherche.php');
include ('Template/_catalogue.php');

?>
<?php
//include Footer.php
include ('Footer.php')
?>