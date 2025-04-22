<?php
$feedback = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["message"])) {
    $nom     = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $sujet   = "🔔 Nouveau message depuis le portfolio - $nom";
    $message = htmlspecialchars($_POST["message"]);

    $contenuMessage = "📬 Quelqu’un a essayé de vous contacter via votre portfolio.\n\n"
        . "👤 Nom : $nom\n"
        . "📧 Email : $email\n"
        . "💬 Message :\n$message";

    // Envoi de l'email
    $retour = mail(
        "kosbarmohamed.31@gmail.com", // Ton adresse
        $sujet,
        $contenuMessage,
        "From: contact@monsite.fr\r\n" .
        "Reply-To: $email"
    );

    if ($retour) {
        $feedback = "<p style='color: lightgreen;'>Merci ! Votre message a été envoyé avec succès.</p>";
    } else {
        $feedback = "<p style='color: red;'>Une erreur s'est produite lors de l'envoi de votre message.</p>";
    }
}
?>

<!-- HTML du formulaire -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2>Me Contacter</h2>

        <?= $feedback ?>

        <form id="contactForm" method="post" action="#contact">
            <div class="form-group mb-3">
                <label for="name">Votre Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required>
            </div>

            <div class="form-group mb-3">
                <label for="email">Votre E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            </div>

            <div class="form-group mb-3">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required><?= isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
            </div>

            <button type="submit" class="form-control btn-submit">Envoyer le Message</button>
        </form>
    </div>
</section>
