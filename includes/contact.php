<section id="contact" class="py-5 bg-light">
    <div class="container">
        <h2>Contact Me</h2>
        <form id="contactForm" method="post" action="index.php#contact">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if ($success): ?>
                <div class="alert alert-success">
                    Thank you for your message!
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        </form>
    </div>
</section>