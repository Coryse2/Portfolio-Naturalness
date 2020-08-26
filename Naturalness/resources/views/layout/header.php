<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../public/images/favicon.ico" />
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="<?= url('css/style.css'); ?>">
  <!-- Add CSS -->
  <link rel="stylesheet" href="<?= url('css/stylesheet.css'); ?>">

  <title>Naturalness</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?= route('home'); ?>">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= route('categories'); ?>">Catégories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= route('recipes'); ?>">Recettes </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= route('material'); ?>">Matériel </a>
        </li>

        <!-- If user not connected -->
        <?php if (!$userIsConnected) : ?>

          <li class="nav-item">
            <a class="nav-link" href="<?= route('signup'); ?>">Inscription</a></li>
          <li class="nav-item">
            <a class="nav-link" href="<?= route('signin'); ?>">Connexion</a></li>
        <?php else : ?>
          <!-- if user connected -->
          <li class="nav-item">
            <a class="nav-link" href="<?= route('account'); ?>">Mon compte</a></li>
          <li class="nav-item">
            <a class="nav-link" href="<?= route('logout'); ?>">Déconnexion</a></li>
        <?php endif; ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= route('about'); ?>">About</a>
        </li>
      </ul>
      <!-- Search engine -->
      <!-- in get so as the search can be shared by the user-->
      <form class="form-inline my-2 my-lg-0" method="get" action="<?= route('search'); ?>">
        <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search">
        <button class="btn my-2 my-sm-0" type="submit">Recherche</button>
      </form>
    </div>
  </nav>

  <main>