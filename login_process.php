<?php
require ('helper.php');
$error=array();

$email=validate_input_email($_POST['email']);
if(empty($email)){
    $error[]="Vous avez oublier votre email";
}

$password=validate_input_text($_POST['password']);
if(empty($password)){
    $error[]="Vous avez oublier votre mot de pass";
}

if(empty($error)){
    $query="SELECT id_user,nom_user,prenom_user,adresse_user,pwd_user,id_fab FROM user WHERE adresse_user='{$email}'";

    $result=$user->db->con->query($query);

   $item=mysqli_fetch_array($result,MYSQLI_ASSOC);

   if (!empty($item)){
       if(password_verify($password,$item['pwd_user'])){

           session_start();
           $_SESSION['userID']=$item["id_user"];
           $_SESSION['idfab']=$item["id_fab"];

           if ($_SESSION['idfab']!=0){
               header("location:admin.php");
           }else{
               header("location:compteuser.php");
           }



           exit();
       }else{ echo "wrong password";}
   }


}else{
    echo "remplir tous les champs requis";
}
