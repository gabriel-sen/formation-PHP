<?php include("base-function.php") ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon super site</title>
</head>

<body>

<!-- L'en-tête -->

<header>

</header>

<?php

include("menu.php");
?>

<!-- Le corps -->

<div id="corps">



<p>
    <?php

        if (!empty($_GET["nom"]) && !empty($_GET["prenom"]) && !empty($_GET["repeter"])){
            $nbRepetition = $_GET["repeter"];
            if (is_numeric($nbRepetition) && $nbRepetition <= 100){ // Pourquoi je ne peux pas forcer le type?
                for ($repetition=1; $repetition<= $nbRepetition; $repetition++){
                    echo "Bonjour" . $_GET["nom"] ." " . $_GET["prenom"];
                    echo "</br>";
                }
            } else{
                echo"veuillez écrire strictement un nombre inférieur à 100";
            }

        } else{
            echo "Vous n'avez pas entré soit prénom soit nom";
        }
    ?>
</p>


</div>


<?php include("footer.php") ?>

</body>
</html>