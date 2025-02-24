<section id="apropos">
    <div class="container">
        <h2>À Propos de Moi</h2>
        <div class="content">
            <div class="text">
                <p>
                    Depuis toujours passionné par le développement web et fasciné par l'impact des nouvelles technologies sur notre quotidien, je suis à la recherche d'un stage dans une entreprise où je pourrai mettre à profit ma créativité et mes compétences. Ce qui m'anime, c'est de participer à la création d'outils numériques qui allient esthétisme, performance et simplicité d'utilisation.
                    Curieux et rigoureux, je suis particulièrement attiré par le développement front-end et le design d’interfaces interactives, où je peux m’exprimer à travers des solutions innovantes et user-friendly.
                    Travailler en équipe est une vraie source d’énergie pour moi : j’aime partager mes idées, apporter mon soutien et contribuer à une dynamique positive en mettant en œuvre de bonnes méthodes d'organisation et de collaboration.
                </p>

                <h3>Compétences</h3>
                <ul>
                  <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                  <?php endforeach; ?>
                </ul>
            </div>
            <div class="cv">
                <img src="images/CV_2024-12-21_Mohamed_Kosbar_page-0001.jpg" alt="Votre CV" class="cv-preview" onclick="openCvModal()">
                <p class="download-link"><a href="path/to/your/cv.pdf" target="_blank">Télécharger mon CV (PDF)</a></p>
            </div>
        </div>
    </div>
</section>
<div id="cvModal" class="modal">
    <span class="close" onclick="closeCvModal()">×</span>
    <img class="modal-content" id="cvImage">
</div>