<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Formulaire SignBot</h3>
    <h4>Formulaire à remplir en nous fournissant vos informations de bases, permettant au bot de signer à votre place.</h4>
    <fieldset>
      <input placeholder="Votre nom" id="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Votre prénom" id="firstname" type="text" tabindex="2" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Votre adresse email" id="email" type="email" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Votre numéro de téléphone (optionnel)" id="phone" type="tel" tabindex="5" required>
    </fieldset>
    <h4>Informations de votre compte scolaire de messagerie</h4>
    <fieldset>
      <input placeholder="Votre compte 'Je Suis En Cours'" id="schoolemail" type="email" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Votre mot de passe 'Je Suis En Cours'" type="password"  id="password" tabindex="6" name="password" minlength="8" required>
    </fieldset>
    <h4>Dessinnez votre signature</h4>
    <fieldset class="signature">
      <div class="bloc-mise-en-page">
      <canvas id="canvas"></canvas>
      </div>
      <button id="bt-clear" name="clear" type="button" id="clear-button">Nettoyer</button>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="submit-button" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>