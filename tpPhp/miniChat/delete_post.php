<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// Effacer tous les message
$req = $bdd->prepare('DELETE from chat');
$req->execute(array($_POST['pseudo'], $_POST['message']));
// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');
