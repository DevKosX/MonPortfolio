<?php
$feedback = $_SESSION['feedback'] ?? '';
$feedbackClass = $_SESSION['feedbackClass'] ?? '';

unset($_SESSION['feedback'], $_SESSION['feedbackClass']);
?>

<section id="contact" class="contact-section">
    <div class="container">
        <h2>Me Contacter</h2>

        <?php if ($feedback): ?>
            <div id="feedbackMessage" class="<?= $feedbackClass ?>">
                <p><?= $feedback ?></p>
            </div>
        <?php endif; ?>

        <form id="contactForm" method="post" action="#contact" class="contact-form" novalidate>
            <div class="form-group">
                <label for="name">Votre Nom</label>
                <input type="text" id="name" name="name" required placeholder="Ex: Mohamed Kosbar">
            </div>

            <div class="form-group">
                <label for="email">Votre E-mail</label>
                <input type="email" id="email" name="email" required placeholder="Ex: mohamed@email.com">
            </div>

            <div class="form-group">
                <label for="message">Votre Message</label>
                <textarea id="message" name="message" rows="6" required placeholder="Écrivez votre message ici..."></textarea>
            </div>

            <button type="submit" class="btn-submit">Envoyer le Message</button>

            <div class="divider">OU</div>

            <div class="contact-icons">
                <figure>
                    <a href="https://github.com/DevKosX" target="_blank" rel="noopener">
                        <img src="public/images/giti.png" alt="GitHub">
                        <figcaption>GitHub</figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="https://www.linkedin.com/in/mohamed-kosbar-5a57972ba/" target="_blank" rel="noopener">
                        <img src="public/images/skills/linkedin.webp" alt="LinkedIn">
                        <figcaption>LinkedIn</figcaption>
                    </a>
                </figure>
            </div>
        </form>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const feedbackMessage = document.getElementById('feedbackMessage');
    if (feedbackMessage) {
        setTimeout(() => {
            feedbackMessage.style.opacity = '0';
            setTimeout(() => {
                feedbackMessage.style.display = 'none';
            }, 500);
        }, 5000);
    }
});
</script>
