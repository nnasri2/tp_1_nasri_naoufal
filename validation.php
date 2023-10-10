<?php
require_once('password.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mot_de_passe = $_POST['mot_de_passe'];

    // Validation de la longueur du mot de passe
    if (strlen($mot_de_passe) < 6 || strlen($mot_de_passe) > 10) {
        echo "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    } else {
        $salt = generer_salt();
        $mot_de_passe_chiffre = chiffrer_mot_de_passe($mot_de_passe, $salt);
        enregistrer_mot_de_passe_chiffre($mot_de_passe_chiffre);

        echo "Mot de passe validé !<br>";
        echo "Salt utilisé : $salt<br>";
        echo "Mot de passe chiffré : $mot_de_passe_chiffre<br>";
        echo"<a  href='test.php'>pour tester ce mdp</a>";
    }
}
?>
