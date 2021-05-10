<?php

function updatePersonnalInformations($name, $first_name){

    $db = dbConnect();

    $updatePersonnalInformations = $db-> prepare('UPDATE users SET name = :name, first_name = :first_name, updated_at = :updated_at WHERE id = :id');

    date_default_timezone_set('Europe/Paris');

    $updatePersonnalInformations->execute([
        'name' => $name,
        'first_name' => $first_name,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($updatePersonnalInformations->errorInfo()));
}

?>