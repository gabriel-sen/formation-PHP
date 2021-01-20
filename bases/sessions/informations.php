<?php
session_start(); // On démarre la session AVANT toute chose
// plus besoin de créé les $_SESSIONS, elles sont déjà créé et utilisés ici.
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <?php include('../menu.php') ?>
        <p>Re-bonjour !</p>
        <p>
            Je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
            Et ton âge hummm... Tu as <?php echo $_SESSION['age']; ?> ans, c'est ça ? :-D
        </p>
        <p> Vous pouvez également fermer la Session si vous le souhaitez</p> <a href="destroy_session.php"> ici </a>
    </body>
</html>