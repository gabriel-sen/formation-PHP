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
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>

    <title>logged</title>
</head>
<body>

    <?php include('menu.php') ?>

    <section class='section'>
        <div class='card w-50'>
            <div class='card-body'>
                <h5 class='card-title'><?php echo $_SESSION['userid'] ?>  êtes bien loggué.</h5>

                <div class='card mb-3'>
                    <img src='https://dyw7ncnq1en5l.cloudfront.net/optim/article/3679/illustration-feu-1__w800.webp' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>Bravo !</h5>
                        <p class='card-text'>


                            <a href="disconected.php" class='btn btn-danger'>Déconnectez-vous</a>
                        </p>
                        <p class='card-text'><small class='text-muted'>C'est joliiii</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>
</html>