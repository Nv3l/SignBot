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
    <link rel="stylesheet" href="Assets/CSS/index.css">
</head>
<body>
    <?php if(($_SERVER['PHP_SELF'] == "/SignBot/index.php") || ($_SERVER['PHP_SELF'] == "/Signbot/index.php")) { ?> 

    <nav class="navbar-index">
    <?php } else { ?>
    <nav>
    <?php } ?>
        <div class="logo">
            <a href="index.php"><img src="Assets/Pictures/jsec-logo.png" alt="Logo Image"></a>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <?php if(($_SERVER['PHP_SELF'] == "/SignBot/index.php") || ($_SERVER['PHP_SELF'] == "/Signbot/index.php")) { ?>
        <ul class="navbar-index-link">
        <?php } else { ?>
        <ul class="nav-links">
        <?php } ?>
            <?php if(isset($_SESSION['connected']) && ($_SERVER['PHP_SELF'] == "/SignBot/account.php") || ($_SERVER['PHP_SELF'] == "/Signbot/account.php")) { ?>
                <li><a href="index.php">Accueil</a></li>
            <?php } elseif(isset($_SESSION['connected'])) { ?>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="account.php">Mon compte</a></li>
            <?php } elseif(($_SERVER['PHP_SELF'] == "/SignBot/login.php") || ($_SERVER['PHP_SELF'] == "/Signbot/login.php")) { ?> 
                <li><a href="index.php">Accueil</a></li>
            <?php } else { ?>
                <li class="navbar-index-link-list"><a class="navbar-index-link-list-login" href="login.php">Se connecter</a></li>
                <li class="navbar-index-link-list"><a class="navbar-index-link-list-singin" href="registerSignBot.php">S'inscrire</a></li>
            <?php }; ?>
        </ul>
        <?php if(isset($_SESSION['connected'])) { ?>

            <div>
                <p><?php echo $_SESSION['firstname']?></p>
                <p>Bienvenue</p>
            </div>
        
        <?php }; ?>
    </nav>
    <script src="nav.js"></script>
</body>
</html>

    
