<?php

if(isset($_GET['changePersonnalInfoSignBot'])) { ?>

  <form class="account-settings" action="Account.php" method="post" onsubmit="return confirm('Etes vous sur de vouloir valider ?');">
    <h3>Changez vos informations personnelles</h3>
    <ul class="account-settings-list">
      <li>
        <input placeholder="Modifier votre nom" name="name" id="name" type="text" tabindex="1" required autofocus>
      </li>
      <li>
        <input placeholder="Modifier votre prénom" name="first_name" id="first_name" type="text" tabindex="2" required autofocus>
      </li>
      <li>
        <button class="account-settings-back-btn color-salmon border-color-salmon" onclick="goBackAccountPage()">Retour</button>
        <button class="account-settings-send-btn background-color-salmon color-white border-color-salmon" name="submit-personnal-informations" type="submit" id="submit-personnal-informations" data-submit="...Sending">Enregister</button>
      </li>
    </ul>
  </form>

<?php
} elseif(isset($_GET['changeEmailSignBot'])) { ?>

    <form class="account-settings" action="Account.php" method="post">
      <h3>Mettre à jour l'adresse email SignBot</h3>
      <ul class="account-settings-list">
        <li>
          <p class="color-black ">Adresse actuelle : <?php if(isset($_SESSION['connected'])) { echo($_SESSION['email']); } ?> </p>
        </li>
        <li>
          <input placeholder="Nouvelle adresse mail" id="email" name="email" type="email" tabindex="3">
        </li>
        <li>
          <button class="account-settings-back-btn color-salmon border-color-salmon" onclick="goBackAccountPage()">Retour</button>
          <button class="account-settings-send-btn background-color-salmon color-white border-color-salmon" name="submit-email-signbot" type="submit" id="submit-email-signbot" data-submit="...Sending">Enregister</button>
        </li>
      </ul>
    </form>

<?php
} elseif(isset($_GET['changePasswordSignBot'])) { ?>

  <form class="account-settings" action="Account.php" method="post">
    <h3>Changez de mot de passe SignBot</h3>
    <ul class="account-settings-list">
      <li>
        <input placeholder="Mot de passe actuel" id="current_password" name="current_password" type="password" required>
      </li>
      <li>
        <input placeholder="Mouveau mot de passe" id="new_password" name="new_password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required>
      </li>
      <li>
        <input placeholder="Confirmer le mot de passe" id="new_password_two" name="new_password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
        <input type="checkbox" onclick="passwordShowSignBot()">Montrer mon mot de passe</input>
      </li>
      <li>
        <button class="account-settings-back-btn color-salmon border-color-salmon" onclick="goBackAccountPage()">Retour</button>
        <button class="account-settings-send-btn background-color-salmon color-white border-color-salmon" name="submit-password-signbot" type="submit" id="submit-password-signbot" data-submit="...Sending">Enregister</button>
      </li>
    </ul>
  </form>

<?php
} elseif(isset($_GET['changeEmailJeSuisEnCours'])) { ?>
  
  <form class="account-settings" action="Account.php" method="post">
    <h3>Mettre à jour l'adresse email JeSuisEnCours</h3>
    <ul class="account-settings-list">
      <li>
        <p class="color-black ">Adresse actuelle : <?php if(isset($_SESSION['connected'])) { echo($_SESSION['email_jsec']); } ?> </p>
      </li>
      <li>
        <input placeholder="Nouvelle adresse" id="email" name="email" type="email" tabindex="1" required>
      </li>
      <li>
        <button class="account-settings-back-btn color-salmon border-color-salmon" onclick="goBackAccountPage()">Retour</button>
        <button class="account-settings-send-btn background-color-salmon color-white border-color-salmon" name="submit-email-jsec" type="submit" id="submit-email-jsec" data-submit="...Sending">Enregister</button>
      </li>
    </ul>
  </form>


<?php
} elseif(isset($_GET['changePasswordJeSuisEnCours'])) { ?>

  <form class="account-settings" action="Account.php" method="post">
    <h3>Changez de mot de passe JeSuisEnCours</h3>
    <ul class="account-settings-list">
      <li>
        <input placeholder="Nouveau mot de passe" id="password_jsec" name="password_jsec" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Votre mot de passe doit contenir au moins 6' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required>
      </li>
      <li>
        <input placeholder="Confirmer le mot de passe" id="password_jsec_two" name="password_jsec_two" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passes ne sont pas identiques, veuillez réessayer' : '');" required>
      </li>
      <li>
        <input type="checkbox" onclick="passwordShowJeSuisEnCours()">Montrer mon mot de passe</input>
      </li>
      <li>
        <button class="account-settings-back-btn color-salmon border-color-salmon" onclick="goBackAccountPage()">Retour</button>
        <button class="account-settings-send-btn background-color-salmon color-white border-color-salmon" name="submit-password-jsec" type="submit" id="submit-password-jsec" data-submit="...Sending">Enregister</button>
      </li>
    </ul>
  </form>

<?php
} elseif(isset($_GET['manageBill'])) { ?>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h1>VOS FACTURE ICI !</h1>

<?php } else { ?>

<section class="account-settings">
  <h3 class="accountpage">Choisir une information à modifier</h3>
  <ul class="account-settings-list">
    <li>
      <a class="color-black " href="account.php?changePersonnalInfoSignBot"> <i class="fas fa-robot"></i> Modifier vos informations personnels (SignBot)</a>
    </li>
    <li>
      <a class="color-black " href="account.php?changeEmailSignBot"> <i class="fas fa-robot"></i> Modifier mon adresse mail (SignBot)</a>
    </li>
    <li>
      <a class="color-black " href="account.php?changePasswordSignBot"> <i class="fas fa-robot"></i> Modifier mon mot de passe (SignBot)</a>
    </li>
    <li>
      <a class="color-black " href="account.php?changeEmailJeSuisEnCours"> <i class="fas fa-pen"></i> Modifier mon adresse mail (JeSuisEnCours)</a>
    </li>
    <li>
      <a class="color-black " href="account.php?changePasswordJeSuisEnCours"> <i class="fas fa-pen"></i> Modifier mon mot de passe (JeSuisEnCours)</a>
    </li>
    <li>
      <a class="color-black " href="account.php?manageBill"> <i class="fas fa-file-invoice"></i> Visualiser mes payements et factures</a>
    </li>
    <li>
      <a class="account-settings-logout-btn color-red border-color-red background-color-red-hover color-white-hover" href="logout.php">Déconnexion</a>
    </li>
  </ul>
</section>

<?php };
