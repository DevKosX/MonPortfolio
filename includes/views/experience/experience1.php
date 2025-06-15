<?php
$owner_name = "Mohamed Kosbar";
$owner_description = "Développeur Web Passionné";

$nomExperience = "Stage chez OFW Ships";
$imagePrincipale = "../../../public/images/ofw_detail.jpg";

$descriptionLongue = "Ce stage de 8 semaines, effectué au sein de la société Devea pour le client OFW Ships, m'a permis de travailler dans un environnement professionnel sur des projets concrets de développement web. J'ai participé à la conception, au développement et à l'intégration de nouvelles fonctionnalités pour la plateforme de gestion des navires. Cette expérience m'a permis de renforcer mes compétences techniques, ma capacité à collaborer au sein d'une équipe, et ma compréhension du cycle complet de développement.";

$entreprise = "Devea (pour le client OFW Ships)";
$duree = "8 semaines";
$periodes = "Avril 2024 - Juin 2024";

$competencesAcquises = [
    "Développement Web (HTML, CSS, JavaScript, PHP)",
    "Utilisation de frameworks PHP modernes",
    "Travail en équipe agile",
    "Gestion de versions avec Git",
    "Communication professionnelle en entreprise",
];

$realisations = [
    "Développement d’un module de suivi de maintenance des navires",
    "Implémentation d’un tableau de bord interactif avec graphiques dynamiques",
    "Optimisation de requêtes SQL pour accélérer les temps de réponse",
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nomExperience ?> - Mon Portfolio</title>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/projet_detail.css">
    <style>
        .retour-en-haut {
            text-align: center;
            padding: 20px 0;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(18, 18, 18, 0.8);
            z-index: 9998;
        }

        .retour-en-haut .btn-retour-experiences {
            background-color: #007ACC;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            font-family: 'Exo 2', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            text-decoration: none;
        }

        .retour-en-haut .btn-retour-experiences:hover {
            background-color: #005EA3;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }

        main.container.detail-projet {
            padding-top: 0;
        }

        .projet-description {
            text-align: justify;
        }
    </style>
</head>
<body>
    <nav id="navbar">
        <div class="container">
            <ul>
                <li><a href="../../../index.php#accueil">Accueil</a></li>
                <li><a href="../../../index.php#apropos">Qui suis-je ?</a></li>
                <li><a href="../../../index.php#competences">Compétences</a></li>
                <li><a href="../../../index.php#projets">Projets</a></li>
                <li><a href="../../../index.php#experience" class="active">Expériences</a></li>
                <li><a href="../../../index.php#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <br><br><br>

    <div class="retour-en-haut">
        <a href="../../../index.php#experience" class="btn-retour-experiences">Retour aux Expériences</a>
    </div>

    <main class="container detail-projet">
        <h1 class="section-title"><?= $nomExperience ?></h1>

        <div class="projet-details-container">
            <div class="projet-image">
                <img src="<?= $imagePrincipale ?>" alt="<?= $nomExperience ?>">
            </div>

            <div class="projet-description">
                <h2>Description du Stage</h2>
                <p><?= $descriptionLongue ?></p>

                <h3>Entreprise</h3>
                <p><?= $entreprise ?></p>

                <h3>Durée</h3>
                <p><?= $duree ?> (<?= $periodes ?>)</p>

                <h3>Compétences Acquises</h3>
                <ul>
                    <?php foreach ($competencesAcquises as $competence) : ?>
                        <li><?= $competence ?></li>
                    <?php endforeach; ?>
                </ul>

                <h3>Réalisations</h3>
                <ul>
                    <?php foreach ($realisations as $realisation) : ?>
                        <li><?= $realisation ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </main>

    <footer style="text-align:center; padding:20px; font-size:0.9em; color:#aaa;">
        Tous droits réservés © 2025 Mohamed Kosbar
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
