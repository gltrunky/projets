<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La page secrete</title>
</head>

<body>
    <?php
    if (isset($_POST['password']) and $_POST['password'] == "kangourou") {
    ?>
        <h1>La page secrete</h1>
        <p>Bienvenue sur la page secrete <?php echo htmlspecialchars($_POST['pseudo']) ?></p>
        <?php ?>
</body>
<?php } else { ?>
    <p>Erreur Le mot de passe est faux!!!!</p>
    <a href="formulaire.php">Retour</a>
<?php } ?>

</html>