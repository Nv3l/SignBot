<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)) { echo $title; } else { echo 'SignBot'; } ?></title>
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/CSS/navbar.css">
    <script type="text/javascript" src="Assets/JavaScript/navbar.js"></script>
    <script type="text/javascript" src="Assets/JavaScript/signature.js"></script>
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
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Tutoriel</a></li>
            <li><a href="registerSignBot.php">Formulaire</a></li>
            <li><a href="#">Mon compte</a></li>
            <li><button class="login-button" href="#">Login</button></li>
            <li><button class="join-button" href="#">Sign In</button></li>
        </ul>
    </nav>
    <script src="nav.js"></script>
</body>
</html>

    
