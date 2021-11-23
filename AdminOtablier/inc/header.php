<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>O'tablier</title>
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>

<body>

    <div class="annonce">
        <?php if (isset($_SESSION['auth'])) : ?>
            <p>Bienvenu</p>
            <a href="lesmemus.php">Ajoutez vos recettes</a>
            <a href="#">Essayer d'autres recettes</a>
        <?php else : ?>
            <a href="login.php">Connectez-vous</a>
            <p>Ajoutez vos recettes</p>
            <a href="#">Essayer d'autres recettes</a>
        <?php endif; ?>

    </div>
    <div class="contenaire">
        <header>
            <div class="logo">
                <img src="inc/image0.jpeg" alt="logo">
            </div>
            <nav class="navi">
                <a href="#">Accueil</a>
                <a href="#">Nos recettes</a>
                <a href="#">Aide</a>
            </nav>
            <div class="connecte">
                <div class="dropdown">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg></span>
                    <div class="dropdown-content">
                        <?php if (isset($_SESSION['auth'])) : ?>
                            <a class="dropdown-item" href="#"><?= $_SESSION['auth']->username; ?></a>
                            <a class="dropdown-item" href="profil.php">Profil</a>
                            <a class="dropdown-item" href="lesmemus.php">Ajouter un plat</a>
                            <a class="dropdown-item" href="changepass.php">Changer le MP</a>
                            <a class="dropdown-item" href="logout.php">Se déconnecter</a>
                        <?php else : ?>
                            <a class="dropdown-item" href="register.php">Inscription</a>
                            <a class="dropdown-item" href="login.php">Connexion</a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>

        </header>
        <!-- <br> <br> -->
        <div class="menu">
            <nav id="navbare" class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="#">Hidden brand</a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            </nav>

        </div>

    </div>

    <div class="container">

        <?php if (Session::getInstance()->hasFlashes()) : ?>
            <?php foreach (Session::getInstance()->getFlashes() as $type => $message) : ?>
                <div class="alert alert-<?= $type; ?>">
                    <?= $message; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>