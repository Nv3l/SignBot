<?php

function updatePersonnalInformations($name, $first_name) {

    $db = dbConnect();

    $updatePersonnalInformations = $db->prepare('UPDATE users SET name = :name, first_name = :first_name, updated_at = :updated_at WHERE id = :id');

    date_default_timezone_set('Europe/Paris');

    $updatePersonnalInformations->execute([
        'name' => $name,
        'first_name' => $first_name,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($updatePersonnalInformations->errorInfo()));

    $_SESSION['first_name'] = $first_name;

    header('location: account.php?changedPersonnalInformations');

    return $updatePersonnalInformations;
}

function updateEmailSignBot($email) {
    $db = dbConnect();

    $updateEmailSignBot = $db->prepare('UPDATE users SET email = :email, updated_at = :updated_at WHERE id = :id');

    date_default_timezone_set('Europe/Paris');

    $updateEmailSignBot->execute([
        'email' => $email,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id']
    ]) or die(print_r($updateEmailSignBot->errorInfo()));

    $_SESSION['email'] = $email;

    header('location: account.php?changedEmailSignBot');

    return $updateEmailSignBot;
}

function updatePasswordSignBot($current_password, $new_password) {

    $db = dbConnect();

    $getPassword = $db->prepare('SELECT password FROM users WHERE id = :id');

    $getPassword->execute([
        'id' => $_SESSION['id'],
    ]) or die(print_r($getPassword->errorInfo()));

    $isPasswordExist = $getPassword->fetch();

    if($isPasswordExist) {

        $isPasswordCorrect = password_verify($current_password, $isPasswordExist['password']);

        if($isPasswordCorrect) {

            $updatePasswordSignBot = $db->prepare('UPDATE users SET password = :password, updated_at = :updated_at WHERE id = :id');

            $passwordHash = password_hash($new_password, PASSWORD_DEFAULT);

            $updatePasswordSignBot->execute([
                'password' => $passwordHash,
                'updated_at' => date('Y-m-d H:i:s'),
                'id' => $_SESSION['id']
            ]) or die(print_r($updatePasswordSignBot->errorInfo()));

            header('location: account.php?changedPassword');

        } else {
            header('location: account.php?changePasswordSignBot&wrongPassword');
        }

    } else {
        header('location: account.php?changePasswordSignBot&passwordNotFound');
    }

}

function updateEmailJSEC($email_jsec) {

    $db = dbConnect();

    $updateEmailJSEC = $db->prepare('UPDATE users SET email_jsec = :email_jsec, updated_at = :updated_at WHERE id = :id');

    $updateEmailJSEC->execute([
        'email_jsec' => $email_jsec,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id']
    ]) or die(print_r($updateEmailJSEC->errorInfo()));

    $_SESSION['email_jsec'] = $email_jsec;

    header('location: account.php?changedEmailJSEC');

    return $updateEmailJSEC;

}

function updatePasswordJSEC($password_jsec) {

    $db = dbConnect();

    $updatePasswordJSEC = $db->prepare('UPDATE users SET password = :password, updated_at = :updated_at WHERE id = :id');

    $passwordHash = password_hash($password_jsec, PASSWORD_DEFAULT);

    $updatePasswordJSEC->execute([
        'password' => $passwordHash,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id']
    ]) or die(print_r($updatePasswordJSEC->errorInfo()));

    header('location: account.php?changedPassword');
    
    return $updatePasswordJSEC;

}

?>