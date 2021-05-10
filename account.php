<?php

$title = "SignBot - Votre compte";

require 'Views/Components/header.php';

if(isset($_SESSION['connected'])) {
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

    if(isset($_POST['submit-email-signbot'])) {
        if(isset($_POST['email'])) {
            $updateEmailSignBot = updateEmailSignBot(htmlspecialchars($_POST['email']));
        }
    }

    if(isset($_POST['submit-password-signbot'])) {
        if(isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['new_password_two'])) {
            $updatePasswordSignBot = updatePasswordSignBot(htmlspecialchars($_POST['current_password']), htmlspecialchars($_POST['new_password_two']));
        }
    }

    if(isset($_POST['submit-email-jsec'])) {
        if(isset($_POST['email'])) {
            $updateEmailJSEC = updateEmailJSEC(htmlspecialchars($_POST['email']));
        }
    }

    if(isset($_POST['submit-password-jsec'])) {
        if(isset($_POST['password_jsec']) && isset($_POST['password_jsec_two'])) {
            $updatePasswordJSEC = updatePasswordJSEC(htmlspecialchars($_POST['password_jsec_two']));
        }
    }

    require 'Views/Components/footer.php';

    
} else {
    header('Location: login.php');
}




?>