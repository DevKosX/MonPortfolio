<?php
// Définir les variables pour l'en-tête (même si non inclus)
$owner_name = "Mohamed Kosbar"; // Remplace par ton nom
$owner_description = "Développeur Web Passionné"; // Remplace par ta description

// Récupérer le nom du projet (pour le titre de la page et potentiellement d'autres infos)
$nomProjet = "Calculatrice en Java"; // À adapter dynamiquement si nécessaire
$imagePrincipale = "../../../public/images/projet1.jpg"; // Image plus détaillée du projet
$descriptionLongue = "Cette calculatrice développée en Java offre une interface utilisateur graphique intuitive (GUI) réalisée avec Swing. Elle permet d'effectuer les quatre opérations arithmétiques de base (addition, soustraction, multiplication, division), ainsi que la gestion des parenthèses pour des calculs plus complexes. Le programme implémente également une gestion des erreurs, notamment pour la division par zéro, afin d'assurer une expérience utilisateur robuste.";
$technologiesUtilisees = [
    "Java",
    "Swing (pour l'interface graphique)",
    "Gestion des exceptions",
    "Conception orientée objet (POO)",
];
$fonctionnalites = [
    "Interface graphique conviviale",
    "Support des opérations +, -, ×, ÷",
    "Gestion des parenthèses pour l'ordre des opérations",
    "Calculs en virgule flottante pour une précision accrue",
    "Gestion des erreurs de division par zéro",
    "Design simple et facile à utiliser",
];
$liensUtiles = [
    "Code Source (GitHub)" => "https://github.com/tonpseudo/calculatrice-java", // Remplace par ton lien GitHub
    "Démonstration (si applicable)" => "https://tonsite.com/calculatrice-java-demo", // Remplace par un lien de démo si tu en as un
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
    // Définir la variable pour le pied de page (même si footer non inclus)
    $owner_email = "mohamed.kosbar@example.com"; // Remplace par ton email
    // Ne pas inclure le footer
    include_once("../../../includes/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>