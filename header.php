<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisanat</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--owlcarousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css-->
    <link rel="stylesheet" href="style.css">
    <?php

    //require ('functions.php');
    include ('functions.php');

    ?>
</head>
<body>
<!--header-->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 color-primaryalt-bg">
        <div class="font-Nanum font-size-12 .float-right">
            <?php
                 if(isset($_SESSION['userID'])){
                   echo  '<a href="compteuser.php"><button type="button" class="btn color-primary-bg text-white"><span><i class="fa-solid fa-id-card"></i></span> Espace client</button></a>
            <a href="logout.php"><button type="submit" id="logout" class="btn color-primary-bg text-white"><span><i class="fa-solid fa-arrow-right-from-bracket"></i></span> Se déconnecter</button></a>';

                 }else{
                     echo '<a href="login.php"><button type="button" class="btn color-primary-bg text-white"><span><i class="fa-solid text-white fa-user"></i></span> Log in</button></a>
            <a href="signin.php"><button type="button" class="btn color-primary-bg text-white"><span><i class="fa-solid text-white fa-user-plus"></i></span> Sign up</button></a>';

                 }
                 if($_SESSION['idfab']!=0){
                     echo  '<a href="admin.php"><button type="button" class="btn color-primary-bg text-white mx-1"><span><i class="fa-solid fa-address-book"></i></span> Espace Artisant</button></a>';
                 }
            ?>

        </div>
    </div>
    <!--primary nav-->
    <nav class="navbar navbar-expand-lg navbar-dark color-primary-bg shadow">
        <div class="container-fluid">
            <a class="navbar-brand p-0 font-size-24 font-Abril" href="#">Artisanat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto font-Serif font-size-18">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listfab.php">Artisans </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Boutique
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Produit cosmétique</a></li>
                            <li><a class="dropdown-item" href="#">Décoration</a></li>
                            <li><a class="dropdown-item" href="#">Bijoux</a></li>
                            <li><a class="dropdown-item" href="#">Produit du tiroire</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="catalogue.php">Catalogue</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>

                </ul>
                <form action="panier.php" class="font-size-14 font-Roboto">
                    <a href="panier.php" class="py-2 rounded-pill color-primaryalt-bg">
                        <span class="font-size-18 px-2 text-white"><i class="fa-solid fa-basket-shopping"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo isset($_SESSION['userID']) ? count($product->getData2("panier")) : 0 ; ?> </span>
                    </a>
                </form>

            </div>
        </div>
    </nav>
</header>
<!--main-->
<main id="main-site">