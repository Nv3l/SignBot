<?php

function dbConnect() {

    require 'Configs/config.php';

    try {
        $db = new PDO('mysql:host=' . $infoDatabase['hostname'] . ';dbname=' . $infoDatabase['dbname'] . ';charset=utf8', $infoDatabase['username'], $infoDatabase['password']);

        return $db;
    } catch(Exception $e) {
        die('Erreur : '. $e->getMessage());
    }
}