document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(x) {
        x.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        targetElement.scrollIntoView({
            behavior: 'smooth'
        });

        // Mise à jour du lien actif
        document.querySelectorAll('nav a').forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });
});

// Afficher/masquer les détails du projet
function toggleProjet(projetId) {
    const projet = document.getElementById(projetId);
    const details = projet.querySelector('.projet-details');
    details.style.display = details.style.display === 'block' ? 'none' : 'block';
}

// Ouvrir le CV
function openCvModal() {
    document.getElementById("cvModal").style.display = "block";
    document.getElementById("cvImage").src = document.querySelector(".cv-preview").src;
}

// Fermer le CV
function closeCvModal() {
    document.getElementById("cvModal").style.display = "none";
}

