<?php
session_start();
require('./function/routes.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Loja de chocolate caseiro">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Doce Caseiro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="?page=home">
    <img src="images/logo.svg" width="120" height="80" class="d-inline-block align-top" alt="Doce Caseiro"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link <?= $page == 'home' ? 'active' : null ?>" href="?page=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $page == 'quemsomos' ? 'active' : null ?>" href="?page=quemsomos">Quem somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $page == 'contato' ? 'active' : null ?>" href="?page=contato">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $page == 'localizacao' ? 'active' : null ?>" href="?page=localizacao">Localização</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<section class="container">
        <?php require("./pages/$page.php"); ?>
</section>

<hr class="featurette-divider">

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Voltar pra cima</a></p>
    <p>20096308-5 - Francisco Elismar FS Luz</p>
    <p></p>
    <p>&copy; <?=date('Y');?> - DoceCaseiro</p>
  </footer>
</main>


    <script src="/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
