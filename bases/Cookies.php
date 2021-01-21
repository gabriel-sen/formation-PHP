<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// time()+365*24*360 signifique qu'on garde le cookie pendant 1 an.
// Le dernier paramètre  true  permet d'activer le mode  httpOnly
// Les propriétée nul nul false, sont des propriétés qu'on utilise pas ici.
// on stock donc le psedo puis le pays.
setcookie('pseudo', 'Gaby', time() + 365 * 24 * 3600, null, null, false, true); // On écrit un cookie
setcookie('pays', 'France', time() + 365 * 24 * 3600, null, null, false, true); // On écrit un autre cookie...

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cooki</title
</head>
<body>

    <!-- pour afficher le contenu stocké dans un cookie -->
    <p>
        Hé ! Je me souviens de toi !<br />
        Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
    </p>

</body>
</html>