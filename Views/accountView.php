<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Modifier les informations de votre compte SignBot</h3>
    <fieldset>
      <input placeholder="Modifier votre nom" id="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Modifier votre prénom" id="firstname" type="text" tabindex="2" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Modifier votre adresse mail" id="email" type="email" tabindex="3" required>
    </fieldset>
    <fieldset>
    <input placeholder="Modifier votre mot de passe" type="password"  id="password" tabindex="6" name="password"minlength="8" required>
    </fieldset>
    <fieldset>
      <input placeholder="Modifier votre numéro de téléphone" id="phone" type="tel" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="submit-button" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

<div>
  <ul>
    <li>
      <a href="account.php?changeEmailJeSuisEnCours">Modifier mon adresse mail (JeSuisEnCours)</a>
    </li>
    <li>
      <a href="registerSignBot?changePasswordJeSuisEnCours">Modifier mon mot de passe (JeSuisEnCours)</a>
    </li>
    <li>
      <a href="registerSignBot?changeInfoJeSuisEnCours">Modifier vos informations personnels(JeSuisEnCours)</a>
    </li>
    <li>
      <a href="registerSignBot?changeEmailSignBot">Modifier mon adresse mail (SignBot)</a>
    </li>
    <li>
      <a href="registerSignBot?changePasswordSignBot">Modifier mon mot de passe (SignBot)</a>
    </li>
  </ul>
</div>

<?php

if(isset($_GET['changeEmailJeSuisEnCours'])) {

    ?>
      <div class="container">  
        <form id="contact" action="" method="post">
          <h3>Modifier les informations de votre compte JeSuisEnCours</h3>
          <fieldset>
            <input placeholder='Modifier votre adresse mail "Je Suis En Cours"' id="schoolemail" type="email" tabindex="4" required>
          </fieldset>
          <fieldset>
          <input placeholder='Modifier votre mot de passe "Je Suis En Cours"' type="password"  id="password" tabindex="6" name="password"minlength="8" required>
          </fieldset>
        </form>
      </div>
    <?php
};

