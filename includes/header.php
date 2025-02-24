<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?></title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#accueil" class="active">Accueil</a></li>
                <li><a href="#apropos">À Propos</a></li>
                <li><a href="#projets">Projets</a></li>
            </ul>
        </div>
    </nav>

    <header id="accueil">
        <div class="container">
            <h1><?php echo $owner_name; ?></h1>
            <h2><?php echo $owner_description; ?></h2>
            <video autoplay loop muted playsinline>
              <source src="images/videoi.mp4" type="video/mp4">
              Votre navigateur ne supporte pas la lecture de vidéos HTML5.
            </video>
            <a href="#projets" class="btn">Voir mes projets</a>
        </div>
    </header>