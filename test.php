<?php
require_once('password.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mot_de_passe_saisi = $_POST['mot_de_passe'];

    // Charger le mot de passe chiffré depuis le fichier
    $mot_de_passe_chiffre_stocke = file_get_contents('password_store.txt');

    // Vérifier si le mot de passe saisi correspond au mot de passe stocké
    if (chiffrer_mot_de_passe($mot_de_passe_saisi, generer_salt()) === $mot_de_passe_chiffre_stocke) {
        echo "Mot de passe correct ! Vous êtes connecté.";
    } else {
        echo "Mot de passe incorrect. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="test.php" method="post">
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required>
        <br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
