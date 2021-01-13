<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    // name
        if (!empty($_POST['name'])){
            $name = strip_tags($_POST['name']);
        } else{
            $name = "pas marché";
        }
    // vegetarien
    if (!empty($_POST['vegetarien'])){
        $vege = "vegetarien";

    } else{
        $vege = "pas vegetarien";
    }
    ?>
    <p>
        Bonjour <?php echo $name; ?> tu est <?php echo $vege ?>
    </p>
</body>
</html>