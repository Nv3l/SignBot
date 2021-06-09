<section class="registerpage">

<!-- inscription -->
<div class="register-container">

    <?php if(isset($_SESSION['connected'])) {?>

        <?php if(isset($_GET['registerJSEC']) && $_SESSION['registerStatus'] == "personal info done") { ?>

            <form id="registerJSEC" action="RegisterSignBot.php" method="post">
              <h3 class="registerpage">Informations de connexion de votre compte de messagerie qui reçoit les e-mails "Je Suis En Cours"</h3>
                <div class="email-form">
                  <label for="email_JSEC">E-mail</label>
                    <div class="email-input">
                      <i class="far fa-envelope fa-2x"></i>
                      <!-- <img class="email-icon" src="Assets/Pictures/email.png" alt=""> -->
                      <input placeholder="Votre email utilisé pour 'Je Suis En Cours'" id="email_JSEC" name="email_JSEC" type="email_JSEC" tabindex="1" required>
                    </div>                
                </div>

              <div>
                <div class="password-form">
                  <label for="password">Mot de passe</label>
                    <div class="password-input">
                      <i class="fas fa-key fa-2x"></i>
                      <!-- <img class="password-icon" src="Assets/Pictures/key.png" alt=""> -->
                        <input placeholder="Votre mot de passe 'Je Suis En Cours'" id="password_JSEC" name="password_JSEC" tabindex="2" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
                    </div>

                    <div class="password-input">
                      <i class="fas fa-key fa-2x"></i>
                      <!-- <img class="password-icon" src="Assets/Pictures/key.png" alt=""> -->
                        <input placeholder="Confirmation" id="password_two_JSEC" name="password_two_JSEC" type="password" tabindex="3" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
                    </div>
              
                <input type="checkbox" onclick="myFunction()">Montrer mon mot de passe</input>
              </div>

              <div class="loginsigninbutton">
                <button class="registerbutton border-color-salmon color-white background-color-salmon" name="submit-registerJSEC" type="submit" id="submit-registerJSEC" data-submit="...Sending">Suivant</button>
              </div>
            </form>
<!-- dessin de signature -->
        <?php } elseif(isset($_GET['registerSign']) && $_SESSION['registerStatus'] == "JSEC done") { ?>

            <h3 class="registerpage">Dessinez votre signature</h3>
            <div class="signature">
              <div class="bloc-mise-en-page">
                <canvas id="canvas"></canvas>
              </div>

              <p class="signatureclean" id="bt-clear" name="clear" type="button" id="clear-button">Nettoyer la signature</p>
                
              <div class="loginsigninbutton">
                  <button class="backupbutton border-color-salmon"><a class="SignIn color-salmon" href="">Retour</a></button>
                  <button class="registerbutton border-color-salmon color-white background-color-salmon"><a name="submit-registerSign" id="submit-registerSign" data-submit="...Sending">Envoyer</button>
              </div>

          <?php } elseif(isset($_GET['finalRegister']) && $_SESSION['registerStatus'] == "DONE") {?>
            
            <h1>C GOOD</h1>
          <?php } elseif($_SESSION['registerStatus'] == "JSEC done") {
            header('location: registerSignBot.php?registerSign');

          } elseif($_SESSION['registerStatus'] == "personal info done") {
            header("location: registerSignBot.php?registerJSEC");
            
          } elseif($_SESSION['registerStatus'] == "DONE") {
            header("location: index.php");
          } ?>

        <?php } else { ?>
        
<!-- formulaire d'inscription -->
        <form id="registerSignBot" action="RegisterSignBot.php" method="post">
          <h3 class="registerpage">Se créer un compte</h3>

          <div class="name-form">
            <label for="name">Nom</label>
              <div class="name-input">
                <i class="far fa-address-card fa-2x"></i>
                <!-- <img class="email-icon" src="Assets/Pictures/name.png" alt=""> -->
            <input placeholder="Votre nom" id="name" name="name" type="text" tabindex="1" required autofocus>
              </div>
          </div>

          <div class="firstname-form">
            <label for="firstname">Prénom</label>
              <div class="firstname-input">
                <i class="far fa-address-card fa-2x"></i>
                <!-- <img class="firstname-icon" src="Assets/Pictures/name.png" alt=""> -->
            <input placeholder="Votre prénom" id="firstname" name="firstname" type="text" tabindex="2" required autofocus>
              </div>
          </div>

          <div class="email-form">
            <label for="email">E-mail</label>
              <div class="email-input">
                <i class="far fa-envelope fa-2x"></i>
                <!-- <img class="email-icon" src="Assets/Pictures/email.png" alt=""> -->
            <input placeholder="Votre adresse email" id="email" name="email" type="text" tabindex="3" required autofemail tabindex="3" required>
              </div>
          </div>

          <div class="phone-form">
            <label for="phone">Téléphone</label>
              <div class="phone-input">
                <i class="fas fa-mobile-alt fa-2x"></i>
                <!-- <img class="phone-icon" src="Assets/Pictures/smartphone.png" alt=""> -->
            <input placeholder="Votre numéro de téléphone (optionnel)" id="phone" name="phone" type="tel" tabindex="4" required>
              </div>
          </div>

          <div class="password-form">
            <label for="password">Mot de passe</label>
              <div class="password-input">
                <i class="fas fa-key fa-2x"></i>
                <!-- <img class="password-icon" src="Assets/Pictures/key.png" alt=""> -->
            <input placeholder="Votre mot de passe" id="password" name="password" type="password" pattern="^\S{4,}$" tabindex="5" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
              </div>

              <div class="password-input">
                <i class="fas fa-key fa-2x"></i>
                <!-- <img class="password-icon" src="Assets/Pictures/key.png" alt=""> -->
            <input placeholder="Confirmation" id="password_two" name="password_two" type="password" pattern="^\S{4,}$" tabindex="6" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
              </div>

            <input type="checkbox" onclick="myFunction()">Montrer mon mot de passe</input>
          </div>

          <div class="loginsigninbutton">
            <button class="registerbutton border-color-salmon color-white background-color-salmon" name="submit-registerSignBot" type="submit" id="submit-registerSignBot" data-submit="...Sending">Suivant</button>
          </div>
        </form>

    <?php } ?>
    
</div>


</section>
