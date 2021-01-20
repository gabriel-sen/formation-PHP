<?php
session_start(); // On démarre la session AVANT toute chose
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
        HEEEEY !  ! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
        Et ton âge hummm... Tu as <?php echo $_SESSION['age']; ?> ans, c'est ça ? :-D
        <p> Vous pouvez également fermer la Session si vous le souhaitez</p> <a href='destroy_session.php'> ici </a>
    </p>
    </body>
</html>