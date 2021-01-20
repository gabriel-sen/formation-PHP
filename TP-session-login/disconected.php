<?php
// On termine la session AVANT d'écrire du code HTML
session_start();
session_destroy();
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>

    <title>Disconected</title>
</head>
    <?php include('menu.php') ?>
<body>

    <section class='section'>
        <div class='card w-50'>
            <div class='card-body'>
                <h5 class='card-title'><?php echo $_SESSION['userid'] ?>  ,vous êtes bien déconnéctés.</h5>
                <a href='index.php' class='btn btn-success'>reconnectez-vous</a>
            </div>
        </div>
    </section>

</body>
</html>