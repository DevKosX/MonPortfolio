<?php
// Définir les variables pour l'en-tête
$owner_name = "Mohamed Kosbar"; // Remplace par ton nom si différent
$owner_description = "Développeur Web Passionné"; // Remplace par ta description si différente

// Informations spécifiques au bénévolat 24H de l'Info
$nomExperience = "Bénévolat 24H de l'Info";
$imagePrincipale = "../../../public/images/24Info_detail.png"; // Chemin vers une image détaillée du bénévolat (À REMPLACER)
$descriptionLongue = "Bénévolat volontaire pour environ un mois de préparation et la participation à l'événement '24H de l'Info' organisé par l'IUT [Nom de l'IUT]. Durant cette expérience, j'ai contribué à [Décris tes tâches principales : organisation, logistique, technique, communication, etc.]. J'ai notamment [Mentionne une ou deux actions spécifiques importantes]. (À REMPLACER avec une description détaillée de ton bénévolat)";
$organisation = "IUT [Nom de l'IUT]"; // Remplace par le nom de ton IUT
$dureePreparation = "Environ 1 mois";
$evenement = "24H de l'Info";
$periodes = "Date de début de la préparation - Date de l'événement"; // Remplace par les dates réelles
$competencesDeveloppees = [
    "Organisation d'événements",
    "Travail en équipe",
    "Communication",
    "Gestion du temps",
    "Adaptabilité face aux imprévus",
    // Ajouter d'autres compétences développées (À REMPLACER)
];
$contributions = [
    "Participation à [Tâche d'organisation spécifique]",
    "Aide à la logistique de [Aspect logistique spécifique]",
    "Contribution à [Aspect de communication ou technique]",
    // Ajouter d'autres contributions spécifiques (À REMPLACER)
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
                <h2>Description du Bénévolat</h2>
                <p><?= $descriptionLongue ?></p>

                <h3>Organisation</h3>
                <p><?= $organisation ?></p>

                <h3>Durée de Préparation</h3>
                <p><?= $dureePreparation ?></p>

                <h3>Événement</h3>
                <p><?= $evenement ?></p>

                <h3>Période</h3>
                <p><?= $periodes ?></p>

                <h3>Compétences Développées</h3>
                <ul>
                    <?php foreach ($competencesDeveloppees as $competence) : ?>
                        <li><?= $competence ?></li>
                    <?php endforeach; ?>
                </ul>

                <h3>Contributions</h3>
                <ul>
                    <?php foreach ($contributions as $contribution) : ?>
                        <li><?= $contribution ?></li>
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