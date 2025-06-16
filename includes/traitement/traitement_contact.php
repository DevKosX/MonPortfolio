<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["message"])) {
    // Sécurisation des données
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $sujet = htmlspecialchars(trim($_POST["sujet"]));
    $messageTexte = htmlspecialchars(trim($_POST["message"]));

    // Message final
    $message = "Ce message vous a été envoyé via le formulaire de contact du site.\n\n";
    $message .= "Nom : $nom\n";
    $message .= "Email : $email\n";
    $message .= "Message :\n$messageTexte";

    // Envoi de l'email
    $destinataire = "kosbarmohamed.31@gmail.com"; // Mets ici ton email réel
    $headers = "From: contact@tonsite.fr\r\n";
    $headers .= "Reply-To: $email\r\n";

    $envoye = mail($destinataire, $sujet, $message, $headers);

    if ($envoye) {
        echo "<p>L'email a bien été envoyé.</p>";
    } else {
        echo "<p>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
    }
}
?>
