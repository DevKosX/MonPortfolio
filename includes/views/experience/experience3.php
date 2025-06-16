<?php
// Définir les variables pour l'en-tête
$owner_name = "Mohamed Kosbar";
$owner_description = "Développeur Web Passionné";

// Informations spécifiques à l'expérience chez Devea
$nomExperience = "Stage chez Devea - Développement Full-Stack PHP";
$imagePrincipale = "../../../public/images/DEVEA.jpg";

$descriptionLongue = "J'ai effectué un stage intensif au sein de l'entreprise Devea, durant lequel j'ai été intégré à l'équipe de développement en tant que développeur PHP. Ce stage a été une véritable immersion dans un environnement professionnel, centré sur le développement d’un ERP interne et la participation au projet France Academy. J'ai travaillé principalement avec le framework Laravel (PHP) sur des modules métiers, en lien avec la gestion des utilisateurs, des formations, et des tableaux de bord. Cette expérience m’a permis de renforcer mes compétences back-end, de comprendre l’architecture d’une application d'entreprise, et de collaborer efficacement dans une équipe agile.";

$entreprise = "Devea SAS";
$duree = "8 semaines";
$periodes = "24 janvier 2025 - 24 mars 2025";

$competencesAcquises = [
    "Développement Back-End avec Laravel (PHP)",
    "Manipulation de bases de données MySQL",
    "Utilisation d’un ERP sur mesure",
    "Respect des standards de développement (MVC, REST)",
    "Travail en équipe agile (méthodologie SCRUM)",
    "Utilisation de Git (versioning et collaboration)",
];

$realisations = [
    "Participation au développement de l’ERP interne (modules utilisateurs, gestion des droits, etc.)",
    "Implémentation de fonctionnalités pour le projet France Academy",
    "Écriture de requêtes optimisées et mise en place de contrôleurs Laravel",
    "Tests fonctionnels et corrections de bugs sur plusieurs modules métiers",
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
        /* Styles du bouton retour en haut */
        .retour-en-haut {
            text-align: center;
            padding: 20px 0;
            /* position: fixed; /* Enlever la position fixed */
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(18, 18, 18, 0.8); /* Fond légèrement transparent pour le bouton */
            z-index: 9998; /* Placer au-dessus du contenu principal */
        }
        .retour-en-haut .btn-retour-experiences {
            background-color: #007ACC;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            display: inline-block;
            margin-top: 0;
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

        /* Ajustement du main pour ne pas avoir de padding-top supplémentaire */
        main.container.detail-projet {
            padding-top: 0;
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
    <br>
    <br>
    <br>
    <div class="retour-en-haut">
        <a href="../../../index.php#experience" class="btn-retour-experiences">Retour aux Expériences</a>
    </div>

    <main class="container detail-projet">
        <h1 class="section-title"><?= $nomExperience ?></h1>

        <div class="projet-details-container">
            <div class="projet-image">
                <img src="<?= $imagePrincipale ?>" alt="<?= $nomExperience ?>">
            </div>

            <div class="projet-description" style="text-align: justify;">
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


    <?php
    $droits_reserves = "Tous droits réservés © 2025 Mohamed Kosbar";
    include_once("../../../includes/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>