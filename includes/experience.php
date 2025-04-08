<section id="experiences">
    <div class="container">
        <h2>Mes Expériences</h2>
        <div class="projets-grid">
            <!-- Expérience 1 -->
            <div class="projet" id="exp-devea">
                <img src="public/images/experience1.jpg" alt="Stage chez Devea">
                <div class="projet-info">
                    <h3>Stage chez Devea</h3>
                    <p class="short-desc">Stage de 8 semaines en développement web au sein de l’entreprise Devea.</p>
                    <button class="btn" onclick="toggleProjet('exp-devea')">En savoir plus</button>
                </div>
                <div class="projet-details">
                    <h4>Description</h4>
                    <p>
                        Lors de ce stage, j'ai travaillé sur le développement d’un ERP en PHP. J'ai participé à la mise en place de fonctionnalités clés comme la pagination, la recherche avancée et la gestion des droits utilisateurs.
                    </p>
                    <p>Responsabilités principales :</p>
                    <ul>
                        <li>Développement back-end avec PHP</li>
                        <li>Refonte des vues avec Blade</li>
                        <li>Utilisation de PostgreSQL pour la base de données</li>
                        <li>Travail en équipe avec Git</li>
                    </ul>
                    <p>Technologies utilisées :</p>
                    <ul>
                        <li>PHP / Laravel</li>
                        <li>Blade</li>
                        <li>PostgreSQL</li>
                        <li>Git / GitHub</li>
                    </ul>
                    <button class="btn" onclick="toggleProjet('exp-devea')">Fermer</button>
                </div>
            </div>

            <!-- Ajoute d'autres expériences ici en copiant-collant la structure ci-dessus -->
        </div>
    </div>
</section>

<script>
    function toggleProjet(id) {
        const projet = document.getElementById(id);
        projet.classList.toggle('ouvert');
    }
</script>
