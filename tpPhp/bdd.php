<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (isset($_GET['console'])) {

    $requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console=?');
    $requete->execute(array($_GET['console']));
    while ($donnees = $requete->fetch()) {
        echo '<p>' . $donnees['nom'] . ' : ' . $donnees['console'] . '</p>';
    }
} else if (empty($_GET['console'])) {
    echo 'Veuillez taper ?console=PC dans l\'url';
} else {
    echo 'test foireux';
}
