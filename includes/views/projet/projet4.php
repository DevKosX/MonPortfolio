<?php
// Définir les variables pour l'en-tête
$owner_name = "Mohamed Kosbar"; // Remplace par ton nom si différent
$owner_description = "Développeur Web Passionné"; // Remplace par ta description si différente

// Informations spécifiques au projet France Academy
$nomProjet = "France Academy";
$imagePrincipale = "../../../public/images/fa.png"; // Chemin vers une image détaillée de France Academy (À REMPLACER)
$descriptionLongue = "Plateforme web complète de gestion des formations et des utilisateurs, développée pour un organisme de formation fictif. Elle permet de gérer le catalogue des formations, les inscriptions des utilisateurs, les sessions de formation, et potentiellement les formateurs et les évaluations. (À REMPLACER avec une description détaillée)";
$technologiesUtilisees = [
    "PHP",
    "HTML",
    "CSS",
    "JavaScript",
    "Laravel (framework PHP)", // Si tu utilises un framework PHP (À REMPLACER)
    "Bootstrap (pour le design)", // Si tu utilises Bootstrap ou un autre framework CSS (À REMPLACER)
    // Ajouter les frameworks/librairies utilisés (ex: Symfony, Laravel, Bootstrap, etc.) (À REMPLACER)
    "Base de données (PostgreSQL)", // Si une base de données est utilisée (À REMPLACER)
];
$fonctionnalites = [
    "Gestion du catalogue des formations (création, lecture, mise à jour, suppression)",
    "Inscription et gestion des profils utilisateurs",
    "Planification et gestion des sessions de formation",
    "Gestion des formateurs (si applicable)",
    "Système d'authentification et d'autorisation",
    "Interface d'administration pour la gestion globale de la plateforme",
    // Ajouter d'autres fonctionnalités (À REMPLACER)
];
$liensUtiles = [
    // Si tu as un lien de démo en ligne ou un dépôt GitHub pour ce projet, ajoute-les ici
    // "Démonstration" => "URL_DE_LA_DEMO", (À REMPLACER)
    // "Code Source (GitHub)" => "URL_DU_REPO_GITHUB", (À REMPLACER)
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
                <li><a href="../../../index.php#projets" class="active">Projets</a></li>
                <li><a href="../../../index.php#experience">Expériences</a></li>
                <li><a href="../../../index.php#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="retour-en-haut">
        <a href="../../../index.php#projets" class="btn-retour-projets">Retour aux Projets</a>
    </div>

    <main class="container detail-projet">
        <h1 class="section-title"><?= $nomProjet ?></h1>

        <div class="projet-details-container">
            <div class="projet-image">
                <img src="<?= $imagePrincipale ?>" alt="<?= $nomProjet ?>">
            </div>

            <div class="projet-description">
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

                <?php if (!empty($liensUtiles)) : ?>
                    <h3>Liens Utiles</h3>
                    <ul>
                        <?php foreach ($liensUtiles as $label => $lien) : ?>
                            <li><a href="<?= $lien ?>" target="_blank" rel="noopener noreferrer"><?= $label ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
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