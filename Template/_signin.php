<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    require ("register.php");
}
?>


<div class="bg-image " style="
    background-image: url('./assets/old-carpentry-tools-on-workbench-607921.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height: 500px;

  ">

    <h2 class="font-Roboto text-center text-white color-secondalt-bg">Sign in</h2>
    <section class="container shadow" style="background-color: rgba(255, 255, 255, 0.7); width: 30%; ">
        <form method="post" id="reg-form" style="margin-left: 25%; margin-right: 25%; padding:20px;">
            <div class="mb-3 font-Roboto">
                <label for="exampleFormControlInput1" class="form-label text-center">Nom:</label>
                <input type="text" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'] ?>" class="form-control" name="firstName" id="firstName" placeholder="Votre Nom">
            </div>
            <div class="mb-3 font-Roboto">
                <label for="exampleFormControlInput1" class="form-label">Prénom:</label>
                <input type="text" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'] ?>" class="form-control" name="lastname" id="lastname" placeholder="Votre Prénom">
            </div>
            <div class="mb-3 font-Roboto">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" class="form-control" name="email" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3 font-Roboto">
                <label for="exampleFormControlInput1" class="form-label">Mot de pass:</label>
                <input type="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="form-control" name="password" id="password" placeholder="********">
            </div>

            <button type="submit" class="btn color-primaryalt-bg btn-lg text-white font-Roboto">Sign in</button>
        </form>
    </section>
