<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Formulaire SignBot</h3>
    <h4>Formulaire à remplir en nous fournissant vos informations de bases, permettant au bot de signer à votre place.</h4>
    <fieldset>
      <input placeholder="Your Name" id="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your First Name" id="firstname" type="text" tabindex="2" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Personnal Email Address" id="email" type="email" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" id="phone" type="tel" tabindex="5" required>
    </fieldset>
    <h4>Informations de votre compte scolaire de messagerie</h4>
    <fieldset>
      <input placeholder="Your School Email Address" id="schoolemail" type="email" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your password" type="password"  id="password" tabindex="6" name="password" minlength="8" required>
    </fieldset>
    <fieldset class="signature">
      <div class="bloc-mise-en-page">
      <canvas id="canvas"></canvas>
      </div>
      <button name="clear" type="button" id="clear-button"><span id="bt-clear">nettoyer</span></button>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="submit-button" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>