<?php
$feedback = "";
$feedbackClass = ""; // Pour styliser le message

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
        "mohamed-kosbar@edu.univ-paris13.fr", // Ton adresse
        $sujet,
        $contenuMessage,
        "From: contact@monsite.fr\r\n" .
        "Reply-To: $email"
    );

    if ($retour) {
        $feedback = "Merci ! Votre message a été envoyé avec succès.";
        $feedbackClass = "success-message"; // Classe CSS pour le succès
    } else {
        $feedback = "Une erreur s'est produite lors de l'envoi de votre message.";
        $feedbackClass = "error-message"; // Classe CSS pour l'erreur
    }
}
?>

<section id="contact" class="contact-section">
    <div class="container">
        <h2>Me Contacter</h2>

        <?php if ($feedback): ?>
            <div id="feedbackMessage" class="<?= $feedbackClass ?>">
                <p><?= $feedback ?></p>
            </div>
        <?php endif; ?>

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

            <button type="submit" class="form-control btn-submit">Envoyer votre Message</button>
        </form>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const feedbackMessage = document.getElementById('feedbackMessage');

        if (feedbackMessage) {
            setTimeout(function() {
                feedbackMessage.style.opacity = '0';
                setTimeout(function() {
                    feedbackMessage.style.display = 'none';
                }, 500); // Délai pour la transition de l'opacité
            }, 5000); // Disparaître après 5 secondes (5000 millisecondes)
        }

        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(event) {
                // La redirection vers #contact est déjà gérée par l'attribut action du formulaire
                // Nous allons simuler un "focus" sur la section contact pour un meilleur effet visuel
                const contactSection = document.getElementById('contact');
                if (contactSection) {
                    contactSection.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    });
</script>

<style>
    .success-message {
        color: lightgreen;
        background-color: rgba(144, 238, 144, 0.1); /* Vert clair transparent */
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }

    .error-message {
        color: red;
        background-color: rgba(255, 0, 0, 0.1); /* Rouge clair transparent */
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }
</style>