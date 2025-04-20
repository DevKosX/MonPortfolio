<!-- 
// // index.php

// // --- LOGIQUE DE TRAITEMENT DU FORMULAIRE DE CONTACT (COPIÉE DE contact.php) ---
// session_start();

// $to = "mohamed-kosbar@edu.univ-paris13.fr";
// $errors = [];
// $success = false;

// if (empty($_SESSION['csrf_token'])) {
//     $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
// }

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
//         $errors[] = "Erreur de sécurité. Veuillez recharger la page.";
//     }

//     $name = trim($_POST["name"] ?? '');
//     $email = trim($_POST["email"] ?? '');
//     $subject = trim($_POST["subject"] ?? '');
//     $message = trim($_POST["message"] ?? '');

//     if (empty($name)) $errors[] = "Votre nom est requis.";
//     if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Votre adresse e-mail est invalide.";
//     if (empty($subject)) $errors[] = "L'objet est requis.";
//     if (empty($message)) $errors[] = "Le message est requis.";

//     if (empty($errors)) {
//         // ... (Votre code d'envoi d'e-mail ici - mail() ou PHPMailer) ...
//         $headers = "From: " . $name . " <" . $email . ">\r\n";
//         $headers .= "Reply-To: " . $email . "\r\n";
//         $headers .= "Content-Type: text/plain; charset=UTF-8";
//         $headers .= "X-Mailer: PHP/" . phpversion();

//         $body = "Nom: $name\nEmail: $email\nObjet: $subject\n\nMessage:\n$message";

//         if (mail($to, '[PORTFOLIO] ' . $subject, $body, $headers)) {
//             $success = true;
//             $_POST = [];
//         } else {
//             $errors[] = "Une erreur est survenue lors de l’envoi du message. Veuillez réessayer plus tard.";
//             error_log("Erreur lors de l'envoi de l'e-mail : " . print_r(error_get_last(), true));
//         }
//     }
// } -->


<?php
require 'config.php';

include 'includes/header.php';
include 'includes/about.php';
include 'includes/skills.php';
include 'includes/portfolio.php';
include 'includes/experience.php';

// // --- INCLUSION DU FORMULAIRE DE CONTACT HTML UNIQUEMENT ---
include 'includes/contact.php';

include 'includes/footer.php';
?>