<?php

function registerSignBot($name, $first_name, $phone, $email, $password) {

    $db = dbConnect();

    $registerSignBot = $db->prepare("INSERT INTO users(name, first_name, phone, email, password, register_done, created_at) VALUES(:name, :first_name, :phone, :email, :password, :register_done, :created_at)");

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    date_default_timezone_set('Europe/Paris');

    $registerSignBot->execute([
        'name' => $name,
        'first_name' => $first_name,
        'phone' => $phone,
        'email' => $email,
        'password' => $passwordHash,
        'register_done' => "personal info done",
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($registerSignBot->errorInfo()));

    $userAutoLogin = $db->prepare('SELECT * FROM users WHERE email = :email');

    $userAutoLogin->execute([
        'email' => $email,
    ]) or die(print_r($userAutoLogin->errorInfo()));

    $logedUser = $userAutoLogin->fetch();

    $_SESSION['id'] = $logedUser['id'];
    $_SESSION['email'] = $email;
    $_SESSION['firstname'] = $first_name;
    $_SESSION['registerStatus'] = $logedUser['register_done'];
    $_SESSION['connected'] = true;

    header('location: registerSignBot.php?registerJSEC');

}


function registerJSEC($email_jsec, $password_jsec) {

    $db = dbConnect();

    $registerJSEC = $db->prepare("UPDATE users SET email_jsec = :email_jsec, password_jsec = :password_jsec, register_done = :register_done, updated_at = :updated_at WHERE id = :id");

    $passwordHash_jsec = password_hash($password_jsec, PASSWORD_DEFAULT);

    date_default_timezone_set('Europe/Paris');

    $registerJSEC->execute([
        'email_jsec' => $email_jsec,
        'password_jsec' => $passwordHash_jsec,
        'register_done' => "JSEC done",
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($registerJSEC->errorInfo()));    
    
    $_SESSION['registerStatus'] = "JSEC done";
    $_SESSION['email_jsec'] = $email_jsec;


    header('location: registerSignBot.php?registerSign');

}

function saveSignature($signature) {

    define('UPLOAD_DIR', 'Signature/');

    $signature = str_replace('data:image/png;base64,', '', $signature);  
    $signature = str_replace(' ', '+', $signature);  

    $data = base64_decode($signature);

    $file = UPLOAD_DIR . $_SESSION['id'] . '.png';  
    $success = file_put_contents($file, $data);

    $db = dbConnect();

    $saveSignature = $db->prepare('UPDATE users SET signature_jsec = :signature_jsec, register_done = :register_done, updated_at = :updated_at WHERE id = :id');

    date_default_timezone_set('Europe/Paris');

    $saveSignature->execute([
        'signature_jsec' => $file,
        'register_done' => "DONE",
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id']
    ]) or die(print_r($saveSignature->errorInfo()));

    $_SESSION['registerStatus'] = "DONE";

}


?>