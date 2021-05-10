<?php

$title = "SignBot - Votre compte";

require 'Views/Components/header.php';

require 'Models/Account.php';

require 'Views/accountView.php';

if (htmlspecialchars(isset($_POST['submit-personnal-informations']))) {
    if (htmlspecialchars(isset($_POST['name'])) && htmlspecialchars(isset($_POST['first_name']))) {
         
        $updatePersonnalInformations = updatePersonnalInformations(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['first_name']));

        echo "<script>alert(\"Modification effectués\")</script>";

    } else {
        echo htmlspecialchars("<script>alert(\Une information n'est pas valide ou manquante.\")</script>");
    }
}

require 'Views/Components/footer.php';

?>