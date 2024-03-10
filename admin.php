<?php
session_start();
ob_start();
if($_SESSION['idfab']==0){
    header("location:index.php");
}
include ('security.php');
//include header.php
include ('header.php');
?>
<?php
require ('Template/_admindash.php');
?>
<?php
//include Footer.php
include ('Footer.php')
?>
