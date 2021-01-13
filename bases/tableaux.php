<?php

$prenom = array('Mathieu','Marie','Robert');

echo $prenom[1];
echo print_r($prenom);
echo '</br>';
for ($numero = 0 ; $numero < 3 ; $numero++){
    echo '<p>' .$prenom[$numero]. '</p>';
}
echo '</br>';
$personne = array('Prenom' => 'Gabriel' , 'nom' => 'sen' , 'age' => '31ans');

foreach ($personne as $nom){
    echo '<p>' .$nom. '</p>';
}
?>