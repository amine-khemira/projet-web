<?php

if(!isset($_SESSION['userID'])) {
    header('location:login.php');
    exit();
}
?>
