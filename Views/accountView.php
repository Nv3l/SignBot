<section class="account">
  <br>
  <br>
  <br>
  <br>
  <h1>test</h1>
<h2>pzeofjpzoejf</h2>
<h3></h3>
</section>

<div class="account-settings">
  <ul class="account-settings-list">
    <li>
      <a class="account-settings-items" href="account.php?changePersonnalInfoSignBot">Modifier vos informations personnels(SignBot)</a>
    </li>
    <li>
      <a class="account-settings-items" href="account.php?changeEmailSignBot">Modifier mon adresse mail (SignBot)</a>
    </li>
    <li>
      <a class="account-settings-items" href="account.php?changePasswordSignBot">Modifier mon mot de passe (SignBot)</a>
    </li>
    <li>
      <a class="account-settings-items" href="account.php?changeEmailJeSuisEnCours">Modifier mon adresse mail (JeSuisEnCours)</a>
    </li>
    <li>
      <a class="account-settings-items" href="account.php?changePasswordJeSuisEnCours">Modifier mon mot de passe (JeSuisEnCours)</a>
    </li>
  </ul>
</div>

<?php

if(isset($_GET['changeEmailJeSuisEnCours'])) {
    ?>
      <div class="container">  
        <form id="contact" action="" method="post">
          <h3>Mettre à jour l'adresse email JeSuisEnCours</h3>
          <p>Adresse actuelle : <?php echo($_SESSION['email_jsec']); ?> </p>
        
        <fieldset>
          <input placeholder="Nouvelle adresse" id="email" type="email" tabindex="3" required>
        </fieldset>
        </form>
      </div>
    <?php
};

if(isset($_GET['changePasswordJeSuisEnCours'])) {
  ?>
  <div class="container">
    <form id="contact" action="" method="post">
      <h3>Changez de mot de passe JeSuisEnCours</h3>
      <fieldset>
        <input placeholder="Mot de passe actuel" id="password_one" name="password" type="password" required>
        <br>
        <br>
        <input placeholder="Nouveau mot de passe" id="password_two" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required>
        <input placeholder="Confirmer le mot de passe" id="password_two" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
        <input type="checkbox" onclick="passwordShowJeSuisEnCours()">Montrer mon mot de passe</input>
      </fieldset>
    </form>
    </div>
<?php
};


if(isset($_GET['changePersonnalInfoSignBot'])) {
  ?>
  <div class="container">
    <form id="contact" action="account.php" method="post" onsubmit="return confirm('Etes vous sur de vouloir valider ?');">
      <h3>Changez vos informations personnelles</h3>
      <fieldset>
        <input placeholder="Modifier votre nom" name="name" id="name" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Modifier votre prénom" name="first_name" id="first_name" type="text" tabindex="2" required autofocus>
      </fieldset>
      <button name="submit-personnal-informations" type="submit" id="submit-personnal-informations" data-submit="...Sending">Envoyer</button>
    </form>
    </div>
<?php
};


if(isset($_GET['changeEmailSignBot'])) {
  ?>
  <div class="container">
    <form id="contact" action="" method="post">
      <h3>Mettre à jour l'adresse email SignBot</h3>
        <fieldset>
          <p>Adresse actuelle : <?php echo($_SESSION['email']); ?> </p>
        </fieldset>
        <fieldset>
          <input placeholder="Nouvelle adresse" id="email" type="email" tabindex="3" required>
        </fieldset>
  
    </form>
    </div>
<?php
};

if(isset($_GET['changePasswordSignBot'])) {
  ?>
   <div class="container">
    <form id="contact" action="" method="post">
      <h3>Changez de mot de passe SignBot</h3>
      
      <fieldset>
        <input placeholder="Mot de passe actuel" id="password_one" name="password" type="password" required>
        <br>
        <br>
        <input placeholder="Mouveau mot de passe" id="password_two" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required>
        <input placeholder="Confirmer le mot de passe" id="password_two" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
        <input type="checkbox" onclick="passwordShowSignBot()">Montrer mon mot de passe</input>
      </fieldset>
    </form>
    </div>
<?php
};


