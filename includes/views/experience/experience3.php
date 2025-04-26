<?php
// Définir les variables pour l'en-tête
$owner_name = "Mohamed Kosbar"; // Remplace par ton nom si différent
$owner_description = "Développeur Web Passionné"; // Remplace par ta description si différente

// Informations spécifiques à l'expérience chez Devea
$nomExperience = "Stage chez Devea";
$imagePrincipale = "../../../public/images/DEVEA_detail.jpg"; // Chemin vers une image détaillée du stage (À REMPLACER)
$descriptionLongue = "Stage de 8 semaines en développement web effectué au sein de l’entreprise Devea. Durant ce stage, j'ai été intégré à l'équipe de développement et j'ai participé à [Décris tes tâches principales et les projets sur lesquels tu as travaillé]. J'ai pu mettre en pratique mes compétences en [Liste les compétences que tu as utilisées et développées]. (À REMPLACER avec une description détaillée de ton stage)";
$entreprise = "Devea SAS";
$duree = "8 semaines";
$periodes = "Date de début - Date de fin"; // Remplace par les dates réelles
$competencesAcquises = [
    "Développement Web (HTML, CSS, JavaScript, PHP, etc.)", // Liste les compétences techniques
    "Travail en équipe",
    "Gestion de projet",
    "Communication professionnelle",
    "Adaptabilité",
    // Ajouter d'autres compétences acquises (À REMPLACER)
];
$realisations = [
    "Participation au développement de [Nom du projet ou de la fonctionnalité]", // Décris tes réalisations concrètes
    "Mise en place de [Description d'une tâche spécifique]",
    "Contribution à l'amélioration de [Aspect spécifique]",
    // Ajouter d'autres réalisations (À REMPLACER)
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

    <?php
    // Définir la variable pour le pied de page
    $owner_email = "mohamed.kosbar@example.com"; // Remplace par ton email si différent
    include_once("../../../includes/footer.php"); // Assure-toi que le chemin vers ton footer est correct
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>