<section class="indexpage background-color-white">
    <div class="login-container">
        <form id="submit-login" action="Login.php" method="post">
            <h3 class="loginpage">Se connecter à votre compte</h3>
            <div class="email-form">
            <label for="email">E-mail</label>
                <div class="email-input">
                    <i class="far fa-envelope fa-2x"></i>
                    <!-- <img class="email-icon" src="Assets/Pictures/email.png" alt=""> -->
                    <input placeholder="Votre E-mail" id="email" name="email" type="text" tabindex="3" required autofemail" tabindex="3" required>
                </div>
            </div>

            <div class="password-form">
                <label for="password">Mot de passe</label>
                <div class="password-input">
                    <i class="fas fa-key fa-2x"></i>
                    <!-- <img class="password-icon" src="Assets/Pictures/key.png" alt=""> -->
                    <input placeholder="Votre mot de passe" id="password" name="password" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 4' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
                </div>
                </div>
            <div class="loginsigninbutton">
                <button class="loginbutton border-color-salmon background-color-salmon color-white" name="submit-login" type="submit" id="submit-login" data-submit="...Sending">Connexion</button>
                <button class="signinbutton border-color-salmon"><a class="SignIn color-salmon" href="registerSignBot.php">Inscription</a></button>
            </div>
        </form>
    </div>
</section>

<!-- message pour valider connexion -->
<?php

if(isset($_SESSION['connected'])) {

    echo("OUAIS TU EST CONNECTE !");
    echo($_SESSION['firstname']);
}

?>