<?php
    //connection BDD
    require_once("database.php");
    $idUtilisateur = "";
    $motDePasse = "";

    if(!empty($_POST)){
        $idUtilisateur = strip_tags($_POST['input_userid']);
        $motDePasse = $_POST['input_password'];
        // on initialise la session seulement si le login est valid
        session_start();
        $_SESSION['userid'] = $idUtilisateur;

        // Requettes SQL
        // On insert dans "la table user"
        $sql = 'INSERT INTO users (email, password) VALUE (:email, :password)';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $idUtilisateur);
        $stmt->bindValue(':password', $motDePasse); // TODO : placer le $hash ici
        $stmt->execute();

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
                    </div>
                    <div class="mb-3">
                        <label for='motDePasse' class="form-label">Password</label>
                        <input type="password" class="form-control" id="motDePasse" name='input_password'>
                    </div>
                    <button type="submit" class="btn btn-success">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>