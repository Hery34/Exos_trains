<?php
// on demande à PHP de déclarer toutes les erreurs.
ini_set('display_errors', 1);
//on renvoie toutes les erreurs.
ini_set('error_reporting', E_ALL);
    // or error_reporting(E_ALL);
//on définit des constantes pour appeler les scripts quelque soit le dossier de travail (en cas de déplacement du dossier /var/html... index.php sera toujour
// en mesure de redéfinir le chemin)
// on remplace index.php pour qu'il n'apparraisse plus
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
// echo $_SERVER['SCRIPT_NAME'];
// echo'<br>';
// echo $_SERVER['SCRIPT_FILENAME'];
// echo'<br>';
// echo'<br>';
// echo ROOT;
// echo'<br>';
// echo'<br>';
// echo WEBROOT;
// echo'<br>';