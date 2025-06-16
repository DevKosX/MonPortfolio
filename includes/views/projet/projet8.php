<?php
// Définir les variables pour l'en-tête
$owner_name = "Mohamed Kosbar";
$owner_description = "Développeur Web Passionné";

// Informations spécifiques au projet
$nomProjet = "Boot Complet sur Disque Dur Externe Raspberry Pi";
$imagePrincipale = "../../../public/images/boot.jpg"; // Chemin vers une image pertinente (À CRÉER/REMPLACER)
$descriptionLongue = "Ce projet consistait à configurer un Raspberry Pi pour démarrer son système d'exploitation directement depuis un disque dur externe, plutôt que depuis la carte SD interne. Cette approche permet d'améliorer considérablement les performances, la fiabilité et la capacité de stockage du Raspberry Pi. Le projet a également intégré la mise en place de bases de données, la configuration réseau avancée, le développement d'applications en C, et l'analyse du trafic réseau pour optimiser les performances et la sécurité. Cela a démontré ma capacité à gérer des architectures système complexes, de l'optimisation matérielle à la programmation bas niveau et à la sécurité réseau.";
$technologiesUtilisees = [
    "Raspberry Pi",
    "Linux (distribution basée sur Debian)",
    "Disque Dur Externe (HDD/SSD)",
    "MySQL / MariaDB",
    "C (Programmation système et d'applications)",
    "Réseaux TCP/IP",
    "Wireshark (Analyse de paquets)",
    "Scripts Shell (Bash)",
    "Gestion des droits et permissions (Linux)",
];
$fonctionnalites = [
    "Configuration du Raspberry Pi pour le démarrage sur HDD/SSD externe",
    "Installation et optimisation du système d'exploitation Linux sur le disque dur externe",
    "Mise en place et administration de bases de données MySQL/MariaDB pour des applications embarquées",
    "Développement d'applications en langage C pour interagir avec le système et le matériel",
    "Configuration de services réseau et optimisation de la connectivité",
    "Analyse approfondie du trafic réseau avec Wireshark pour le débogage et la sécurité",
    "Implémentation de mécanismes de gestion des droits et de la sécurité du système",
    "Automatisation de tâches via des scripts Shell",
];
$liensUtiles = [
    // Si tu as des dépôts GitHub, des documentations ou des tutoriels que tu as créés, ajoute-les ici.
    // Exemple :
    // "Dépôt GitHub du projet (si public)" => "URL_DE_TON_REPO_GITHUB",
    // "Tutoriel de Configuration (si disponible)" => "URL_DE_TON_TUTORIEL",
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