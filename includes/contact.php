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

            <!-- Début correction taille icônes -->
            <div class="contact-icons">
                <figure class="icon-container">
                    <a href="https://github.com/DevKosX" target="_blank" rel="noopener">
                        <img src="public/images/github.png" alt="GitHub">
                    </a>
                </figure>
                <figure class="icon-container">
                    <a href="https://www.linkedin.com/in/mohamed-kosbar-5a57972ba/" target="_blank" rel="noopener">
                        <img src="public/images/skills/linkedin.webp" alt="LinkedIn">
                    </a>
                </figure>
            </div>
            <!-- Fin correction -->
        </form>
    </div>
</section>

<!-- CSS spécifique pour rendre les deux icônes identiques -->
<style>
.contact-icons {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 20px;
}

.icon-container {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    background-color: #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.icon-container img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}
</style>

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
