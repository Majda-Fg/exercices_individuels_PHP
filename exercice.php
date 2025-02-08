<form action="exercice.php" method="POST">
 <p>Votre nom : <input type="text" name="first_name" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php
if(!empty($_POST['first_name'])){
    echo 'Bonjour ' . htmlspecialchars($_POST["first_name"]);
}elseif(!empty($_GET['first_name'])){
    echo 'Bonjour ' . htmlspecialchars($_GET["first_name"]);
}else{echo 'Bonjour anonyme';}

// http://localhost/exercice_individuel_PHP/exercice.php?first_name=Majda
// résultat : Bonjour Majda

// http://localhost/exercice_individuel_PHP/exercice.php?first_name=
// résultat : Bonjour anonyme
?>