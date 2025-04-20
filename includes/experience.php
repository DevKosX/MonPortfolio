<section id="experience">
    <div class="container">
        <h2 class="section-title">Mes Expériences</h2>
        <div class="projets-grid">
            <!-- Expérience 1 -->
            <div class="projet" id="exp-devea">
                <img src="public/images/ofw.jpg" alt="Stage chez Devea">
                <div class="projet-info">
                    <h3>OFW Ships</h3>
                    <p class="short-desc">Stage de 8 semaines en développement web au sein de l’entreprise Devea.</p>
                    <button class="btn" onclick="toggleProjet('exp-devea')">En savoir plus</button>
                </div>
            </div>

            <!-- Ajoute d'autres expériences ici en copiant-collant la structure ci-dessus -->
            <div class="projet" id="exp-devea">
                <img src="public/images/DEVEA.jpg" alt="Stage chez Devea">
                <div class="projet-info">
                    <h3>Stage chez Devea</h3>
                    <p class="short-desc">Stage de 8 semaines en développement web au sein de l’entreprise Devea.</p>
                    <button class="btn" onclick="toggleProjet('exp-devea')">En savoir plus</button>
                </div>
            </div>
        </div>
    </div>
    <br>
</section>

<script>
    function toggleProjet(id) {
        const projet = document.getElementById(id);
        projet.classList.toggle('ouvert');
    }
</script>
