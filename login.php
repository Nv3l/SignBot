<?php

$title = "SignBot - Accueil";

require 'Views/Components/header.php';

require 'Models/Login.php';

if (isset($_POST['submit-login'])) {

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $connectUser = connectUser($_POST['email'], $_POST['password']);

    }

}

require 'Views/loginView.php';

require 'Views/Components/footer.php';

?>