<section class="account">
  <br>
  <br>
  <br>
  <br>
  <h1>test</h1>

</section>

<div>
  <ul>
    <li>
      <a href="account.php?changeEmailJeSuisEnCours">Modifier mon adresse mail (JeSuisEnCours)</a>
    </li>
    <li>
      <a href="account.php?changePasswordJeSuisEnCours">Modifier mon mot de passe (JeSuisEnCours)</a>
    </li>
    <li>
      <a href="account.php?changePersonnalInfoSignBot">Modifier vos informations personnels(SignBot)</a>
    </li>
    <li>
      <a href="account.php?changeEmailSignBot">Modifier mon adresse mail (SignBot)</a>
    </li>
    <li>
      <a href="account.php?changePasswordSignBot">Modifier mon mot de passe (SignBot)</a>
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

if(isset($_GET['changePasswordJeSuisEnCours'])) {
  ?>
  <div class="container">
    <form id="contact" action="" method="post">
      <h3>Modifier votre mot de passe JeSuisEnCours</h3>
        <input placeholder="Votre email utilisé pour 'Je Suis En Cours'" id="schoolemail" type="email" tabindex="4" required>
      </fieldset>
      <fieldset>
        <input placeholder="Votre mot de passe 'Je Suis En Cours'" id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
        <input placeholder="Confirmation" id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
        <input type="checkbox" onclick="myFunction()">Montrer mon mot de passe</input>
      </fieldset>
    </form>
    </div>
<?php
};


if(isset($_GET['changePersonnalInfoSignBot'])) {
  ?>
  <div class="container">
    <form id="contact" action="" method="post">
      <h3>Modifier votre mot de passe SignBot</h3>
      <fieldset>
        <input placeholder="Modifier votre nom" id="name" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Modifier votre prénom" id="firstname" type="text" tabindex="2" required autofocus>
      </fieldset>
    </form>
    </div>
<?php
};


if(isset($_GET['changeEmailSignBot'])) {
  ?>
  <div class="container">
    <form id="contact" action="" method="post">
      <h3>Modifier votre adresse email SignBot</h3>
        <fieldset>
          <input placeholder="Modifier votre adresse email actuelle" id="email" type="email" tabindex="3" required>
        </fieldset>
        <fieldset>
          <input placeholder="Votre nouvelle adresse email" id="email" type="email" tabindex="3" required>
        </fieldset>
    </form>
    </div>
<?php
};

if(isset($_GET['changePasswordSignBot'])) {
  ?>
   <div class="container">
    <form id="contact" action="" method="post">
      <h3>Modifier votre mot de passe SignBot</h3>
        <input placeholder="Votre email utilisé pour 'Je Suis En Cours'" id="schoolemail" type="email" tabindex="4" required>
      </fieldset>
      <fieldset>
        <input placeholder="Votre mot de passe 'Je Suis En Cours'" id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
        <input placeholder="Confirmation" id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
        <input type="checkbox" onclick="myFunction()">Montrer mon mot de passe</input>
      </fieldset>
    </form>
    </div>
<?php
};


