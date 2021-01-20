<?php
// On termine la session AVANT d'écrire du code HTML
session_start();
session_destroy();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disconected</title>
</head>
<body style='margin: 0;'>
    <?php include('menu.php') ?>

    Vous êtes bien déconnéctés
    <br>
    <br>
    <a href="index.php">Reconnectez-vous</a>
</body>
</html>