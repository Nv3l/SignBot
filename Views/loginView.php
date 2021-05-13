<div class="container">
    <form id="submit-login" action="Login.php" method="post">
        <h3>Connexion à SignBot</h3>
        <div>
          <input placeholder="Votre adresse email" id="email" name="email" type="text" tabindex="3" required autofemail" tabindex="3" required>
        </div>
        <div>
          <input placeholder="Votre mot de passe" id="password" name="password" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 4' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
          <input type="checkbox" onclick="myFunction()">Montrer mon mot de passe</input>
        </div>
        <div>
          <button name="submit-login" type="submit" id="submit-login" data-submit="...Sending">Envoyer</button>
        </div>
    </form>
</div>

<?php

if(isset($_SESSION['connected'])) {

    echo("OUAIS TU EST CONNECTE !");
    echo($_SESSION['firstname']);
}

?>