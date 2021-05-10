<?php

session_start();

require 'Functions/database.fn.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)) { echo $title; } else { echo 'SignBot'; } ?></title>
    <link rel="stylesheet" href="Assets/CSS/color.css">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/CSS/navbar.css">
    <link rel="stylesheet" href="Assets/CSS/account.css">
    <link rel="stylesheet" href="Assets/CSS/registerSignBot.css">
    <script type="text/javascript" src="Assets/JavaScript/navbar.js"></script>
    <script type="text/javascript" src="Assets/JavaScript/signature.js"></script>
    <script type="text/javascript" src="Assets/JavaScript/showPassword.js"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="logo.svg" alt="Logo Image">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Tutoriel</a></li>
            <li><a href="registerSignBot.php">Formulaire</a></li>
            <?php if (isset($_SESSION['connected'])) { ?>
            <li><a href="account.php">Mon compte</a></li>
            <?php }?>
            <?php if (isset($_SESSION['connected'])) {
                    ?> <li><a class="login-button" href="logout.php">Logout</a></li> <?php
                } else {
                    ?> <li><a class="login-button" href="login.php">Login</a></li> <?php
                }?>
            
            <li><a class="join-button" href="#">Sign In</a></li>
        </ul>
    </nav>
    <script src="nav.js"></script>
</body>
</html>

    
