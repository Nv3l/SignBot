<?php

$title = "SignBot - Enregistrement";

require 'Views/Components/header.php';

require 'Models/RegisterSignBot.php';

if(isset($_POST['submit-registerSignBot'])) {

    if(isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password_two'])) {

        if(isset($_POST['phone'])) {
            registerSignBot($_POST['name'], $_POST['firstname'], $_POST['phone'], $_POST['email'], $_POST['password_two']);
        } else {
            registerSignBot($_POST['name'], $_POST['firstname'], $_POST['email'], $_POST['password_two']);

        }
    }
}

if (isset($_POST['submit-registerJSEC'])) {

    if(isset($_POST['email_JSEC']) && isset($_POST['password_two_JSEC'])) {
        registerJSEC($_POST['email_JSEC'], $_POST['password_two_JSEC'], "TEST SIGNATURE");
    }
}

require 'Views/registerSignBotView.php';

require 'Views/Components/footer.php';

?>