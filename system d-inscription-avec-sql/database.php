<?php

    $dbName = "inscriptions"; //nom de la base de données
    $dbUser = "root"; //nom d'utilisateur MySQL
    $dbPass = ""; //son mot de passe
    $dbHost = "localhost"; //l'adresse ip du serveur mysql

    //ajoutez ;port=8989 à la fin si vous devez spécifier le port de MySQL
    $dsn = "mysql:dbname=$dbName;host=$dbHost;charset=utf8";

    //cette variable $pdo contient notre connexion à la bdd \o/
    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        //affiche les messages d'erreurs SQL
        //repasser à ERRMODE_SILENT en prod !!!!
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]);

?>