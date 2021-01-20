<?php
    // Imaginons que c'est la BDD
    $logindValide = 'Gab';
    $paswordValide = '123';

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login-session</title>
</head>

<body style="margin: 0;">

    <?php include('menu.php') ?>

    <form method='POST'>
        <label for='mail'>Login</label> <br>
        <input type='text' id='mail' placeholder='ID utilisateur' name='input_userid' required> <br>
        <br>
        <label for='password'>Mot de passe</label> <br>
        <input type='password' id='mdp' name='input_password' required> <br>
        <br>
        <button type='submit'>valider</button>
    </form>

    <?php
    // On teste si c'est ben renseigné
    if (isset($_POST['input_userid']) && isset($_POST['input_password'])) {
        // on teste si le MDP et si le login correspond bien.
        if (($_POST['input_password'] == $paswordValide) && ($_POST['input_userid'] == $logindValide)) {
            // on initialise la session seulement si l'userID et le password sont renseigné
            session_start();
            $_SESSION['userid'] = $_POST['input_userid'];
            $_SESSION['passworld'] = $_POST['input_password'];

            // On redirige l'utilisateur vers la page?
            header('location: logged.php');
        } else {
            echo 'mot de passe ou  User Id invalide (fouillez dans les variables)';
        }
    }

    ?>

</body>
</html>