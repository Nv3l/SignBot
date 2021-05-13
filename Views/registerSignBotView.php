<div class="container">

<section class="registerpage">

        <?php if(isset($_GET['registerJSEC']) && $_SESSION['registerStatus'] == "personal info done") { ?>

<div class="register-container">  

  <?php if(isset($_GET['registerJSEC'])) { ?>
  <form id="registerJSEC" action="RegisterSignBot.php" method="post">
    <h3>Informations de votre compte scolaire de messagerie</h3>
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

          } elseif($_SESSION['registerStatus'] == "personal info done") {
            header("location: registerSignBot.php?registerJSEC");
            
          } ?>

        <?php } else { ?>

<?php } else { ?>
  <form id="registerSignBot" action="RegisterSignBot.php" method="post">
    <h3>Se créer un compte</h3>
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



</section>
