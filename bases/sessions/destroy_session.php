<?
// ON initialise quand même l'utilisationd es dessions
    session_start();
// On détruis la session même si le Timout le fait tout seul
    session_destroy()
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session détruite</title>
</head>
<body>
    <?php include('../menu.php') ?>
    <p>Votre session est bien détruite.</p>
    <p>Vous pouvez en re-lancer une </p> <a href="index.php"> ici </a>
</body>
</html>