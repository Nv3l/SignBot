<?php

function connectUser($email, $password) {

    $db = dbConnect();

    $getUser = $db->prepare("SELECT * FROM users WHERE email = :email");

    $getUser->execute([
        'email' => $email
    ]) or die(print_r($getUser->errorInfo()));

    $checkUser = $getUser->fetch();

    if($checkUser) {

        $passwordDatabase = $db->prepare("SELECT password FROM users WHERE email = :email");

        $passwordDatabase->execute([
            'email' => $email,
        ]) or die(print_r($passwordDatabase->errorInfo()));

        $passwordCheck = $passwordDatabase->fetch();

        $isPasswordCorrect = password_verify($password, $passwordCheck['password']);

        if($isPasswordCorrect) {

            $_SESSION['id'] = $checkUser['id'];
            $_SESSION['email'] = $email;
            $_SESSION['firstname'] = $checkUser['first_name'];
            $_SESSION['email_jsec'] = $checkUser['email_jsec'];
            $_SESSION['registerStatus'] = $checkUser['register_done'];
            $_SESSION['connected'] = true;

            header('location: index.php');

        } else {
            header('location: login.php?wrongPassword');
        };

    } else {
        header('location: login.php?wrongEmail');
    };

};


?>