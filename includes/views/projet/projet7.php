<?php
// Définir les variables pour l'en-tête
$owner_name = "Mohamed Kosbar";
$owner_description = "Développeur Web Passionné";

// Informations spécifiques au projet Santa Claus Python
$nomProjet = "Santa Claus Python";
$imagePrincipale = "../../../public/images/papnoel.jpg";
$descriptionLongue = "Un projet développé en Python qui explore des concepts de logique et d'algorithmes à travers une interface en console. Ce projet pourrait impliquer la résolution de puzzles, la simulation de scénarios ou l'application de structures de données de manière créative.";
$technologiesUtilisees = [
    "Python",
    "Algorithmes",
    "Logique de programmation",
    "Interface en console",
];
$fonctionnalites = [
    "Implémentation d'algorithmes spécifiques",
    "Interaction utilisateur via l'interface en console",
    "Gestion de données (si applicable)",
    "Résolution de problèmes logiques",
    "Structure de code claire et modulaire en Python",
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nomProjet ?> - Mon Portfolio</title>
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
        .retour-en-haut .btn-retour-projets {
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
        .retour-en-haut .btn-retour-projets:hover {
            background-color: #005EA3;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }
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
                <li><a href="../../../index.php#projets" class="active">Projets</a></li>
                <li><a href="../../../index.php#experience">Expériences</a></li>
                <li><a href="../../../index.php#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <br><br><br>

    <div class="retour-en-haut">
        <a href="../../../index.php#projets" class="btn-retour-projets">Retour aux Projets</a>
    </div>

    <main class="container detail-projet">
        <h1 class="section-title"><?= $nomProjet ?></h1>

        <div class="projet-details-container">
            <div class="projet-image">
                <img src="<?= $imagePrincipale ?>" alt="<?= $nomProjet ?>">
            </div>

            <div class="projet-description" style="text-align: justify;">
                <h2>Description du Projet</h2>
                <p><?= $descriptionLongue ?></p>

                <h3>Technologies Utilisées</h3>
                <ul>
                    <?php foreach ($technologiesUtilisees as $technologie) : ?>
                        <li><?= $technologie ?></li>
                    <?php endforeach; ?>
                </ul>

                <h3>Fonctionnalités</h3>
                <ul>
                    <?php foreach ($fonctionnalites as $fonctionnalite) : ?>
                        <li><?= $fonctionnalite ?></li>
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
