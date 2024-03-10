<?php
//session_start();
//$userr=array();
//
//if(isset($_SESSION['userID'])){
//    $userr=$user->get_user_info($_SESSION['userID']);
//    print_r($userr);
//}
if($_SERVER['REQUEST_METHOD']=="POST"){
    require ("login_process.php");
}
?>

<div class="bg-image " style="
    background-image: url('./assets/old-carpentry-tools-on-workbench-607921.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height: 500px;

  ">

    <h2 class="font-Roboto text-center text-white color-secondalt-bg">Log in</h2>
    <form method="post" style="margin-left: 25%; margin-right: 25%; padding:20px; background-color:rgba(252, 250, 250, 0.5);">
        <div class="form-floating mb-3 " style="width: 50%; margin-left: 25%; opacity: 1;">
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            <label for="floatingInput">Adresse e-mail</label>
        </div>
        <div class="form-floating" style="width: 50%; margin-left:25% ;">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <label for="floatingPassword">Mot de passe</label>
        </div>
        <button type="submit" class="btn color-primaryalt-bg text-white btn-lg shadow mt-5" style="margin-left: 40%;">Se connecter</button>
    </form>

</div>
