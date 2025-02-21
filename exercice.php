<form action="exercice.php" method="POST">
 <p>Votre nom : <input type="text" name="first_name" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php
session_start();

// $_SESSION['first_name'] = 'first_name';

if(!empty($_GET['first_name'])){
    echo 'Bonjour ' . htmlspecialchars($_GET['first_name']);
    $_SESSION['first_name'] = $_GET['first_name'];
}elseif(!empty($_POST['first_name'])){
    echo 'Bonjour ' . htmlspecialchars($_POST['first_name']);
    $_SESSION['first_name'] = $_POST['first_name'];
}elseif(isset($_SESSION['first_name'])){
    echo 'Bonjour ' . htmlspecialchars($_SESSION['first_name']);
}else{echo 'Bonjour anonyme';}

// http://localhost/exercice_individuel_PHP/exercice.php?first_name=Majda
// résultat : Bonjour Majda

// http://localhost/exercice_individuel_PHP/exercice.php?first_name=
// résultat : Bonjour anonyme
echo "<br>";
echo session_encode();
?>