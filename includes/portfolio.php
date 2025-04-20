<section id="projets">
  <div class="container">
    <h2 class="section-title text-light">Mes Projets</h2>
    <div class="projets-grid">

      <!-- Projet : Calculatrice Java -->
      <div class="projet">
        <img src="public/images/projet1.jpg" alt="Calculatrice en Java">
        <div class="projet-info">
          <h3>Calculatrice en Java</h3>
          <p class="short-desc">Une calculatrice simple et intuitive développée en Java.</p>
          <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalCalculatrice">
            En savoir plus
          </button>
        </div>
      </div>

      <!-- Modal : Calculatrice -->
      <div class="modal fade" id="modalCalculatrice" tabindex="-1" aria-labelledby="modalCalculatriceLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content text-dark">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="modalCalculatriceLabel">Calculatrice en Java</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
              <p>Cette calculatrice en Java offre une interface graphique (GUI) et permet d’effectuer les opérations arithmétiques de base.</p>
              <ul>
                <li>Interface graphique (Swing)</li>
                <li>+ - × ÷, gestion des parenthèses</li>
                <li>Calculs en virgule flottante</li>
                <li>Gestion des erreurs (division par zéro)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Projet : Jeu du Fakir -->
      <div class="projet">
        <img src="public/images/24Info.png" alt="Jeu du Fakir">
        <div class="projet-info">
          <h3>Jeu du Fakir</h3>
          <p class="short-desc">Projet développé lors des 24H de l'Info à Villetaneuse.</p>
          <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalFakir">
            En savoir plus
          </button>
        </div>
      </div>

      <!-- Modal : Jeu du Fakir -->
      <div class="modal fade" id="modalFakir" tabindex="-1" aria-labelledby="modalFakirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content text-dark">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="modalFakirLabel">Jeu du Fakir</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
              <p>Développé en équipe pendant un hackathon de 24H, le jeu du Fakir est une simulation interactive permettant d’illustrer les lois de probabilité à travers une grille de picots.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Ajoute tes autres projets ici, même structure -->

    </div>
  </div>
</section>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
