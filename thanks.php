<?php

session_start();


function sanitizeInput($inserted_input)
{
    return htmlspecialchars(trim(stripslashes($inserted_input)));
}

$firstname = $lastname = $email = $subject = $phone = $message = "";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION = $_POST;
    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '') {
        $errors[] = "firstname=1";
    } else {
        $firstname = sanitizeInput($_POST['firstname']);
    }

    if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '') {
        $errors[] = "lastname=1";
    } else {
        $lastname = sanitizeInput($_POST['lastname']);
    }

    if (!isset($_POST['email']) || trim($_POST['email']) === '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "email=1";
    } else {
        $email = sanitizeInput($_POST['email']);
    }

    if (!isset($_POST['phone']) || trim($_POST['phone']) === '') {
        $errors[] = "phone=1";
    } else {
        $phone = sanitizeInput($_POST['phone']);
    }

    if (!isset($_POST['subject']) || trim($_POST['subject']) === '' || $_POST['subject'] === '...') {
        $errors[] = "subject=1";
    } else {
        $subject = sanitizeInput($_POST['phone']);
    }

    if (!isset($_POST['message']) || trim($_POST['message']) === '') {
        $errors[] = "message=1";
    } else {
        $message = sanitizeInput($_POST['phone']);
    }
}


if (!empty($errors)) {
    // traitement du formulaire
    // puis redirection
    $errorsJoined = join('&', $errors);
    header("Location: index.php?" . $errorsJoined);
} else {
    echo "Merci $_POST[firstname] $_POST[lastname] de nous avoir contacté à propos de “$_POST[subject]”.<br><br>
    Un de nos conseiller vous contactera soit à l’adresse $_POST[email] ou par téléphone au $_POST[phone] dans les plus brefs délais pour traiter votre demande :<br><br>
    $_POST[message]" . PHP_EOL;

    echo "<br><a href=index.php>Envoyer un autre message</a>";
}
