<?php
if($_GET["first_name"] == null){
    echo 'Bonjour anonyme';
}else{echo 'Bonjour ' . htmlspecialchars($_GET["first_name"]);}

// http://localhost/exercice_individuel_PHP/exercice.php?first_name=Majda
// résultat : Bonjour Majda

// http://localhost/exercice_individuel_PHP/exercice.php?first_name=
// résultat : Bonjour anonyme
?>