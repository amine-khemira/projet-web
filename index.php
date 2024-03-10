<?php
session_start();

ob_start();
require ('security.php');
  //include header.php
include ('header.php');
?>
<?php
include('Template/_banner-area.php');
include('Template/_top-sale.php');
include('Template/_blogs.php');
?>



<?php
//include Footer.php
include ('Footer.php')
?>


