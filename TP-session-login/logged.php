<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logged</title>
</head>
<body style='margin: 0;'>
    <?php include('menu.php') ?>

    <?php echo $_SESSION['userid'] ?>  êtes bien loggué.
    <br>
    <br>
    <a href="disconected.php">Déconnectez-vous</a>

</body>
</html>