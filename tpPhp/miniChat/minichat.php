<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Mini Chat</title>
</head>

<body class="bg-secondary">
    <div class="container">
        <h1 class="text-center mb-5 mt-4 text-warning">Mini-chat</h1>
        <form action="minichat_post.php" method="post">
            <div class="col-4 mr-auto ml-auto bg-dark pt-3">
                <label class="text-light" for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" placeholder="Votre pseudo" name="pseudo" id="pseudo">
            </div>
            <div class="col-4 mr-auto ml-auto bg-dark pt-3">
                <label class="text-light" for="message">Message :</label>
                <textarea class="form-control" placeholder="votre message" name="message" id="message"></textarea>
            </div>
            <div class="col-4 mr-auto ml-auto bg-dark pt-3 pb-3">
                <input class="btn btn-success" type="submit" value="Envoyer">
            </div>
        </form>
        <?php
        // Connexion à la base de données
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        // Récupération des 10 derniers messages
        $reponse = $bdd->query('SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0, 10');
        ?>
        <div class="bg-light col-4 ml-auto mr-auto mt-5 p-4 bg-dark text-light">
            <?php
            // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
            if (($reponse->rowCount()) > 0) {
                while ($donnees = $reponse->fetch()) {
                    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
                }
            } else {
                echo 'Le chat est vide';
            }
            $reponse->closeCursor();
            ?>
        </div>
        <div class="col-4 mr-auto ml-auto mt-2">
            <form action="delete_post.php" method="post">
                <div class="col-4 mr-auto ml-auto">
                    <input class="btn btn-danger" type="submit" value="Clear">
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>