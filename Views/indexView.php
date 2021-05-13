
<section class="indexpage white-background">

<div class="login-container">
    <form id="submit-login" action="Login.php" method="post">
        <h3 class="loginpage">Se connecter à votre compte</h3>
        <div class="email-form">
        <label for="email">E-mail</label>
            <div class="email-input">
                <img class="email-icon" src="Assets/Pictures/email.png" alt="">
                    <input placeholder="Votre E-mail" id="email" name="email" type="text" tabindex="3" required autofemail" tabindex="3" required>
            </div>
        </div>

        <div class="password-form">
            <label for="password">Mot de passe</label>
            <div class="password-input">
                <img class="password-icon" src="Assets/Pictures/key.png" alt="">
                <input placeholder="Votre mot de passe" id="password" name="password" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 4' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
            </div>
            </div>
        <div class="loginsigninbutton">
            <button class="loginbutton border-red background-red-button white" name="submit-login" type="submit" id="submit-login" data-submit="...Sending">Connexion</button>
            <button class="signinbutton border-red"><a class="SignIn red" href="registerSignBot.php">Inscription</a></button>
        </div>
    </form>
</div>

<?php

if(isset($_SESSION['connected'])) {

    echo("OUAIS TU EST CONNECTE !");
    echo($_SESSION['firstname']);
}

?>


<?php

if(isset($_GET['signIn'])) {
  ?>
  
<div class="container">  

<?php if(isset($_GET['registerJSEC'])) { ?>
<form id="registerJSEC" action="RegisterSignBot.php" method="post">
  <h4>Informations de votre compte scolaire de messagerie</h4>
  <div>
    <input placeholder="Votre email utilisé pour 'Je Suis En Cours'" id="email_JSEC" name="email_JSEC" type="email_JSEC" tabindex="1" required>
  </div>
  <div>
    <input placeholder="Votre mot de passe 'Je Suis En Cours'" id="password_JSEC" name="password_JSEC" tabindex="2" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
    <input placeholder="Confirmation" id="password_two_JSEC" name="password_two_JSEC" type="password" tabindex="3" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
    <input type="checkbox" onclick="myFunction()">Montrer mon mot de passe</input>
  </div>
  <div>
    <button name="submit-registerJSEC" type="submit" id="submit-registerJSEC" data-submit="...Sending">Envoyer</button>
  </div>
</form>

<?php } else if(isset($_GET['registerSign'])) { ?>

<h4>Dessinnez votre signature</h4>
<div class="signature">
  <div class="bloc-mise-en-page">
    <canvas id="canvas"></canvas>
  </div>
  <button id="bt-clear" name="clear" type="button" id="clear-button">Nettoyer la signature</button>
</div>
<button name="submit-registerSign" id="submit-registerSign" data-submit="...Sending">Envoyer</button>

<?php } else { ?>
<form id="registerSignBot" action="RegisterSignBot.php" method="post">
  <h3>Formulaire SignBot</h3>
  <h4>Formulaire à remplir en nous fournissant vos informations de bases, permettant au bot de signer à votre place.</h4>
  <div>
    <input placeholder="Votre nom" id="name" name="name" type="text" tabindex="1" required autofocus>
  </div>
  <div>
    <input placeholder="Votre prénom" id="firstname" name="firstname" type="text" tabindex="2" required autofocus>
  </div>
  <div>
    <input placeholder="Votre adresse email" id="email" name="email" type="text" tabindex="3" required autofemail tabindex="3" required>
  </div>
  <div>
    <input placeholder="Votre numéro de téléphone (optionnel)" id="phone" name="phone" type="tel" tabindex="4" required>
  </div>
  <div>
    <input placeholder="Votre mot de passe" id="password" name="password" type="password" pattern="^\S{4,}$" tabindex="5" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
    <input placeholder="Confirmation" id="password_two" name="password_two" type="password" pattern="^\S{4,}$" tabindex="6" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
    <input type="checkbox" onclick="myFunction()">Montrer mon mot de passe</input>
  </div>
  <div>
    <button name="submit-registerSignBot" type="submit" id="submit-registerSignBot" data-submit="...Sending">Envoyer</button>
  </div>
</form>
<?php } ?>

<?php if(isset($_GET['finalRegister'])) { ?>
<h1>C GOOD</h1>
<?php }; ?>

</div>
<?php
};
?>

<?php
if(isset($_SESSION['connected'])) { 

    echo("OUAIS TU EST CONNECTE !");
    echo($_SESSION['firstname']);
}
?>

</section>
