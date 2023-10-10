<?php

function generer_salt() {
    return "ABC1234@";
}

function chiffrer_mot_de_passe($mot_de_passe, $salt) {
    return hash('sha256', $mot_de_passe . $salt);
}

function enregistrer_mot_de_passe_chiffre($mot_de_passe_chiffre) {
    file_put_contents('password_store.txt', $mot_de_passe_chiffre);
}


?>