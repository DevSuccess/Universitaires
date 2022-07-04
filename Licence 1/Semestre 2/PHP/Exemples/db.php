<?php

    function db_connexion() {
        $pdo = new PDO('mysql:host=localhost;dbname=info253', 'root', '');

        return $pdo;
    }
?>