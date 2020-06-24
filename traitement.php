<?php
session_start();

// vérification du remplissage du formulaire

$nomValide = false;
$prenomValide = false;
$emailValide = false;
$telValide = false;

if(isset($_POST['nom']) && ctype_alpha($_POST['nom'])) {
    $nomValide = true;
}
if(isset($_POST['prenom']) && ctype_alpha($_POST['prenom'])) {
    $prenomValide = true;
}
if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $emailValide = true;
}
if(isset($_POST['telephone']) && ctype_alnum($_POST['telephone'])) {
    $telValide = true;
}

// Actions à effectuer en fonction de la validation du formulaire

if($nomValide && $prenomValide && $emailValide && $telValide) {
    $_SESSION['form_valid'] = true;
    $to = "mail@mail.fr";
    $object = "Récupération des données pour le Majestic";
    $message =  "Nom : " . $_POST['nom'] . " / Prénom : " . $_POST['prenom'] .
                " / Email : " . $_POST['email'] . " / Téléphone : " . $_POST['telephone'] ;
    mail($to, $subject, $message);
}
else {
    $_SESSION['form_error'] = true;
}

// retour sur la page d'accueil

header('Location: index.php');


?>