<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    Cette page a pour vocation de tester un login mdp
    <!-- le mdp est kangourou -->
    <form action="login.php" method="POST">
        <label for="mail" >Login</label> <br>
        <input type="text" id="mail" placeholder="mail" name='mail' required> <br>
        <br>
        <label for="password">Mot de passe</label> <br>
        <input type="password" id="mdp" name='password' required > <br>
        <br>
        <button type="submit">valider</button>
    </form>
</body>
</html>