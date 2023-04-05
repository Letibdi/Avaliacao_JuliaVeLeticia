<?php
  include '../Util.php';
  Util::verificar();

?>
<html>
  <head>
    <title>Guns n' Malha</title>
  </head>
  <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Guns n' Malha</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="UsuarioList.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Camisetas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Bandas</a></li>
            <li><a class="dropdown-item" href="#">Anime</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Serie</a></li>
          </ul>
        </li>
      </form>
    </div>
  </div>
</nav>
		<?php
			echo "Seja bem vindo! <br>";
echo "A loja Guns n' Malha, surgiu para trazer camisetas de boa qualidade para nossos clientes. Vendendo camisetas exclusivas e oficiais, de suas bandas, animes e filmes favoritos. <br><a href='login.php?sair=1'>Voltar</a>";
		?>
    
  </body>
</html>