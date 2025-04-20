<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?></title>
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        /* Pour que la section prenne toute la hauteur de l'écran */
        #accueil {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        #accueil video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            filter: brightness(1.1) contrast(1.05);
        }

        #accueil .container {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        #accueil .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #0066ff;
            color: white;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        #accueil .btn:hover {
            background-color: #0044aa;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#apropos">Qui suis-je ?</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#experience">Expériences</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Nouvelle section avec vidéo en fond -->
    <section id="accueil">
        <video autoplay loop muted playsinline>
            <source src="public/images/videoi.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture de vidéos HTML5.
        </video>
        <div class="container">
            <h1><?php echo $owner_name; ?></h1>
            <h2><?php echo $owner_description; ?></h2>
            <a href="#projets" class="btn">Voir mes projets</a>
        </div>
    </section>
</body>
</html>
