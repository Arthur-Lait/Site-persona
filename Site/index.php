<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site Safra Cheia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>


<body style="background-color: #bac1b8;">

  <header>
    <nav>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index"><strong>SafraCheia</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Produtos">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""><strong>Contato</strong></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </header>

  <main>

    <?php

    if (isset($_GET['param'])) {
      $p = explode("/", $_GET['param']);
    }

    $page = $p[0] ?? 'Home';
    $paginas = "paginas/{$page}.php";

    if (file_exists($paginas)) {
      include($paginas);
    } else {
      include("paginas/404.php");
    }
    ?>
  </main>

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <img class="footer-img" src="imagens/LogoSemFundo.png">
       
      <span class="mb-3 mb-md-0 text-body-secondary">
        © 2025 Safra Cheia, Arthur Duarte de Souza
      </span>
    </div>
   
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
</body>

</html>