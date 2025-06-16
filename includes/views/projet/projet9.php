<?php
$owner_name = "Mohamed Kosbar";
$owner_description = "Développeur de jeux 3D & Web";

$nomProjet = "World Cup Strike 2025";
$imagePrincipale = "../../../public/images/wdj.jpg"; // <-- Mets une image réelle ici
$descriptionLongue = "Penalty World Cup 3D est un jeu de tirs au but inspiré de FIFA, développé avec JMonkeyEngine. Le jeu propose une ambiance immersive avec des cages réalistes, des maillots floqués aux couleurs des pays (France, Brésil, Égypte, Allemagne), une vue caméra professionnelle, et une logique de tournoi avec demi-finale/finale.";

$technologiesUtilisees = [
    "Java (JDK 17+)",
    "JMonkeyEngine 3.6",
    "Minie Physics",
    "Lemur GUI",
    "PBR Materials",
    "ParticleMonkey (effets visuels)",
    "Renthyl Networking (préparé pour le multijoueur)",
];

$fonctionnalites = [
    "Choix de pays avec tenues et drapeaux",
    "Animation de tirs avec IA gardien (50% réussite)",
    "Tournoi complet : demi-finales, finale",
    "Effets sonores et visuels (fumée, filets)",
    "Système de score dynamique",
    "Interface élégante et responsive",
    "Gestion des tirs et arrêts avec physique réaliste",
];

$liensUtiles = [
    "Démo YouTube du jeu" => "https://youtu.be/demo_penalty_3d", // Mets ta vidéo ici si tu en as une
    "Dépôt GitHub" => "https://github.com/toncompte/PenaltyWorldCup3D", // Ton dépôt ici
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
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            text-decoration: none;
        }
        .retour-en-haut .btn-retour-projets:hover {
            background-color: #005EA3;
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
