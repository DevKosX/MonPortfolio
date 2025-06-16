<?php
$owner_name = "Mohamed Kosbar";
$owner_description = "Développeur Web Passionné";

$nomExperience = "Bénévolat - Organisation des 24H de l'Info";
$imagePrincipale = "../../../public/images/24Info.png"; 

$descriptionLongue = "Entre mai et juin 2025, j’ai participé activement à l'organisation complète de l’événement \"24H de l'Info\" à l'IUT de Villetaneuse. Ce projet bénévole m’a permis d’être pleinement impliqué dans toutes les étapes clés de la préparation : planification logistique, coordination des équipes, gestion du matériel informatique, et accueil des participants le jour J. J’ai notamment assuré la mise en place des espaces de travail, la communication avec les intervenants et l'encadrement des équipes tout au long de l’événement. Cette expérience m’a permis de développer des compétences essentielles en organisation, en communication, et en gestion d’événement dans un contexte réel et dynamique.";

$entreprise = "IUT de Villetaneuse";
$duree = "1 mois";
$periodes = "Mai - Juin 2025";

$competencesAcquises = [
    "Organisation d'événement",
    "Communication et relation client",
    "Gestion du temps et des imprévus",
    "Travail d’équipe",
    "Réactivité et autonomie",
];

$realisations = [
    "Organisation complète des 24H de l’Info à l’IUT de Villetaneuse",
    "Accueil et orientation des participants et intervenants",
    "Préparation logistique des salles et des postes informatiques",
    "Coordination avec les équipes techniques et pédagogiques",
    "Création d’un site pour recueillir les avis des participants",
];

$lienAvis = "https://akd9380devlg.wixsite.com/24h-de-l";
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

        .lien-utile {
            margin-top: 30px;
        }

        .lien-utile a {
            color: #007ACC;
            font-weight: bold;
            text-decoration: underline;
        }

        .lien-utile a:hover {
            color: #005EA3;
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
                <h2>Description du Bénévolat</h2>
                <p><?= $descriptionLongue ?></p>

                <h3>Organisé par</h3>
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

                <div class="lien-utile">
                    <h3>Liens utiles</h3>
                    <p>💬 Consultez le site des 24H de l’Info avec les retours des participants :  
                        <a href="<?= $lienAvis ?>" target="_blank"><?= $lienAvis ?></a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer style="text-align:center; padding:20px; font-size:0.9em; color:#aaa;">
        Tous droits réservés © 2025 Mohamed Kosbar
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
