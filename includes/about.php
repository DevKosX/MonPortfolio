<!-- Section À propos -->
<section id="apropos">
  <h2 class="section-title">À Propos de Moi</h2>
  <div class="apropos-content">
    <div class="text">
      <p>
      En tant que développeur web passionné, j'ai acquis une expertise solide en HTML5, CSS3 et JavaScript, avec une maîtrise des frameworks React et Node.js. J'utilise Git quotidiennement pour la gestion de versions et suis familier avec les méthodes agiles. Mon expérience couvre le développement frontend responsive et l'optimisation des performances backend. J'ai implémenté plusieurs API RESTful et travaillé avec diverses bases de données SQL et NoSQL. Amateur de football, j'apporte à mes projets la même discipline et esprit d'équipe que sur le terrain. Je recherche des défis techniques stimulants où je pourrai appliquer mes compétences en intégration continue, tests automatisés et déploiement cloud.
      </p>
    </div>
    <div class="cv">
      <img src="public/images/CV_2024-12-21_Mohamed_Kosbar_page-0001.jpg" alt="Prévisualisation du CV" class="cv-preview" onclick="openCvModal();">
      <a href="public/images/CV_2024-12-21_Mohamed_Kosbar_page-0001.pdf" class="btn download" download="CV_Mohamed_Kosbar.pdf" title="Téléchargez mon CV au format PDF">
  Télécharger mon CV
</a>

    </div>
  </div>
</section>

<!-- Modal pour le CV -->
<div id="cvModal" class="modal" onclick="closeCvModal(event)">
  <span class="close" onclick="closeCvModal(event)">&times;</span>
  <img class="modal-content" src="../MonPortfolio/public/images/CV_2024-12-21_Mohamed_Kosbar_page-0001.jpg" id="cvImage">
</div>


<script>
  function openCvModal() {
    document.getElementById("cvModal").style.display = "block";
  }

  function closeCvModal(event) {
    if (event.target == document.getElementById("cvModal") || event.target.className == "close") {
      document.getElementById("cvModal").style.display = "none";
    }
  }     

</script>