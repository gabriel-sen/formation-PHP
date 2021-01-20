<?php
    // Le résultat attendu
    $loginValide = 'Gab@gmail.com';
    $motDePasseValide = '123';
    //les éléments de dcondition
    $mauvaisId = FALSE;
    $pasunMotDePasse = FALSE;

    // On teste si c'est ben renseigné
    if (isset($_POST['input_userid']) && isset($_POST['input_password'])) {
        // on teste si le login est valid
        if ($_POST['input_userid'] == $loginValide) {
            // on initialise la session seulement si le login est valid
            session_start();
            $_SESSION['userid'] = $_POST['input_userid'];
        } else {
            $mauvaisId = TRUE; // si le UserID est pas bon
        }
        //mauvais mot de passe
        if (($_POST['input_password'] == $motDePasseValide)) {
            // On redirige l'utilisateur vers la page si le MDP est bon
            header('location: logged.php');
        } else {
            $pasunMotDePasse = TRUE; // si le UserID est pas bon
        }

    }

    ?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href="css/style.css" rel='stylesheet'>

    <title>login-session</title>
</head>

<body>

    <?php include('menu.php') ?>
    <section class="section">
        <div class='card w-50'>
            <div class='card-body'>
                <h5 class='card-title'>Connection</h5>

                <form method='POST'>
                    <div class='mb-3'>
                        <label for='email' class='form-label'>Email address</label>
                        <input type='email' class='form-control' id='email' aria-describedby='emailHelp' name='input_userid'>
                        <div id='emailHelp' class='form-text'>
                            <?php
                                if ($mauvaisId == TRUE) {
                                    echo '<p class="text-danger">Mauvais email</p>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for='motDePasse' class="form-label">Password</label>
                        <input type="password" class="form-control" id="motDePasse" name='input_password'>
                        <div id='passwordHelp' class='form-text'>
                            <?php
                            if ($pasunMotDePasse == TRUE) {
                                echo '<p class="text-danger">Mauvais mot de passe</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>