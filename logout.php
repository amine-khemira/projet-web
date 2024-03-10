<?php
session_destroy();
unset($_SESSION["userID"]);
header("location:login.php");