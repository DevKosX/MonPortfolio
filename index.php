<?php
session_start();

// --- Traitement formulaire contact ici ---
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["message"])) {
    // Traitement du formulaire
    $nom     = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $sujet   = "🔔 Nouveau message depuis le portfolio - $nom";
    $message = htmlspecialchars($_POST["message"]);

    $contenuMessage = "📬 Quelqu’un a essayé de vous contacter via votre portfolio.\n\n"
        . "👤 Nom : $nom\n"
        . "📧 Email : $email\n"
        . "💬 Message :\n$message";

    $retour = mail(
        "mohamed-kosbar@edu.univ-paris13.fr",
        $sujet,
        $contenuMessage,
        "From: contact@monsite.fr\r\n" .
        "Reply-To: $email"
    );

    if ($retour) {
        $_SESSION['feedback'] = "Merci ! Votre message a été envoyé avec succès.";
        $_SESSION['feedbackClass'] = "success-message";
    } else {
        $_SESSION['feedback'] = "Une erreur s'est produite lors de l'envoi de votre message.";
        $_SESSION['feedbackClass'] = "error-message";
    }

    // Redirection pour éviter le re-POST
    header("Location: " . $_SERVER['PHP_SELF'] . "#contact");
    exit();
}

require 'config.php';

include 'includes/header.php';
include 'includes/about.php';
include 'includes/skills.php';
include 'includes/portfolio.php';
include 'includes/experience.php';

// --- INCLUSION DU FORMULAIRE DE CONTACT HTML UNIQUEMENT ---
include 'includes/contact.php';

include 'includes/footer.php';
?>
