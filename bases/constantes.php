<?php

//Premiere façon de déclarer une constante
define('CONSTANTE', 'php version' . phpversion());
//deuxiem facçon de déclarer une constante
const UNE_AUTRE_CONSTANTE = 'PHP 7' ;

echo '<p><code>CONSTANTE</code> = ' . CONSTANTE . '<br></p>';
echo '<code>UNE_AUTRE_CONSTANTE</code> = ' . UNE_AUTRE_CONSTANTE . '<br>';

//on teste la constante
var_dump(defined('UNE_AUTRE_CONSTANTE'));

?>