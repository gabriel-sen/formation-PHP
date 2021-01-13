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
    <?php
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $validate = "Nasa";
        $link ="index.php";

        if(!empty($mail) && !empty($password) && !empty($password == $validate)){
            echo "Vous avez utilisé le mail : " . $mail ."<br>";
            echo "Vous êtes bien sur le site de la Nasa";
        }else{
            echo "<a href='$link'>Link</a>";
        }
    ?>


</body>
</html>