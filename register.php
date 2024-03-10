<?php
require ('helper.php');
$error= array();

$firstName=validate_input_text($_POST['firstName']);
if(empty($firstName)){
    $error[]="Vous avez oublier votre nom";
}

$lastname=validate_input_text($_POST['lastname']);
if(empty($lastname)){

    $error[]="Vous avez oublier votre prenom";
}


$email=validate_input_email($_POST['email']);
if(empty($email)){
    $error[]="Vous avez oublier votre email";
}

$password=validate_input_text($_POST['password']);
if(empty($password)){
    $error[]="Vous avez oublier votre mot de pass";
}

if(empty($error)){
   $hashed_pwd=password_hash($password,PASSWORD_DEFAULT);
    $query="INSERT INTO `user`(nom_user,prenom_user,adresse_user,pwd_user) VALUES ('$firstName','$lastname','$email','$hashed_pwd') ";
    $user->db->con->query($query);

    header("location:login.php");



}else{
    echo 'non valide';
    print_r($error);

}










