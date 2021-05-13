<div class="container">

    <?php if(isset($_SESSION['connected'])) {?>

        <?php if(isset($_GET['registerJSEC']) && $_SESSION['registerStatus'] == "personal info done") { ?>

            <form id="registerJSEC" action="RegisterSignBot.php" method="post">
              <h4>Informations de votre compte scolaire de messagerie</h4>
              <fieldset>
                <input placeholder="Votre email utilisé pour 'Je Suis En Cours'" id="email_JSEC" name="email_JSEC" type="email_JSEC" tabindex="1" required>
              </fieldset>
              <fieldset>
                <input placeholder="Votre mot de passe 'Je Suis En Cours'" id="password_JSEC" name="password_JSEC" tabindex="2" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
                <input placeholder="Confirmation" id="password_two_JSEC" name="password_two_JSEC" type="password" tabindex="3" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
                <input type="checkbox" onclick="myFunction()">Montrer mon mot de passe</input>
              </fieldset>
              <fieldset>
                <button name="submit-registerJSEC" type="submit" id="submit-registerJSEC" data-submit="...Sending">Envoyer</button>
              </fieldset>
            </form>

        <?php } elseif(isset($_GET['registerSign']) && $_SESSION['registerStatus'] == "JSEC done") { ?>

            <h4>Dessinnez votre signature</h4>
            <div class="signature">
              <div class="bloc-mise-en-page">
                <canvas id="canvas"></canvas>
              </div>
              <button id="bt-clear" name="clear" type="button" id="clear-button">Nettoyer la signature</button>
            </div>
            <button name="submit-registerSign" id="submit-registerSign" data-submit="...Sending">Envoyer</button>

          <?php } elseif(isset($_GET['finalRegister']) && $_SESSION['registerStatus'] == "DONE") {?>
            
            <h1>C GOOD</h1>
          <?php } elseif($_SESSION['registerStatus'] == "JSEC done") {
            header('location: registerSignBot.php?registerSign');

          } elseif($_SESSION['registerStatus'] == "personal info done") {
            header("location: registerSignBot.php?registerJSEC");
            
          } ?>

        <?php } else { ?>

        <form id="registerSignBot" action="RegisterSignBot.php" method="post">
          <h3>Formulaire SignBot</h3>
          <h4>Formulaire à remplir en nous fournissant vos informations de bases, permettant au bot de signer à votre place.</h4>
          <fieldset>
            <input placeholder="Votre nom" id="name" name="name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Votre prénom" id="firstname" name="firstname" type="text" tabindex="2" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Votre adresse email" id="email" name="email" type="text" tabindex="3" required autofemail tabindex="3" required>
          </fieldset>
          <fieldset>
            <input placeholder="Votre numéro de téléphone (optionnel)" id="phone" name="phone" type="tel" tabindex="4" required>
          </fieldset>
          <fieldset>
            <input placeholder="Votre mot de passe" id="password" name="password" type="password" pattern="^\S{4,}$" tabindex="5" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
            <input placeholder="Confirmation" id="password_two" name="password_two" type="password" pattern="^\S{4,}$" tabindex="6" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
            <input type="checkbox" onclick="myFunction()">Montrer mon mot de passe</input>
          </fieldset>
          <fieldset>
            <button name="submit-registerSignBot" type="submit" id="submit-registerSignBot" data-submit="...Sending">Envoyer</button>
          </fieldset>
        </form>

    <?php } ?>
    
</div>