<?php
$owner_name = "Mohamed Kosbar";
$owner_description = "Développeur Web Passionné";

$nomExperience = "Stage chez OFW Ships - Expérience Inoubliable";
$imagePrincipale = "../../../public/images/ofw.jpg"; // adapte ce chemin si besoin

$descriptionLongue = "En décembre 2019, j'ai eu l'opportunité de vivre une expérience humaine et professionnelle inoubliable grâce à un stage au sein de l'entreprise OFW Ships, spécialisée dans la pêche en eaux salées. La première semaine s'est déroulée dans les bureaux de l'entreprise, où j’ai pu découvrir l’organisation d’une société maritime. La seconde semaine, j’ai embarqué avec l’équipe sur un navire de pêche en Norvège. Cette immersion m’a permis d’apprendre énormément sur le travail d’équipe, l’adaptabilité et le fonctionnement concret de l’industrie maritime.";

$entreprise = "OFW Ships (entreprise de pêche maritime)";
$duree = "2 semaines";
$periodes = "Décembre 2019";

$competencesAcquises = [
    "Découverte du monde professionnel en entreprise",
    "Immersion dans le secteur maritime (organisation, logistique)",
    "Travail en équipe dans un environnement exigeant",
    "Capacité d’adaptation en contexte international",
    "Communication en conditions réelles (terrain et mer)",
];

$realisations = [
    "Observation des opérations administratives et logistiques de l'entreprise",
    "Participation à la vie à bord d’un navire en Norvège",
    "Compréhension globale du métier de marin et des enjeux de la pêche",
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
