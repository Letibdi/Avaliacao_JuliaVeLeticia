<?php
  include '../Util.php';
  Util::verificar();

?>
<html>
  <head>
    <title>Guns n' Malha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <img src="/Logo/logo.png"  width="70" height="70">
    <a class="navbar-brand" href="#">Guns n' Malha</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="UsuarioList.php">Clientes</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="EstiloList.php">Estilo</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="DisponivelList.php">Camisetas disponíveis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col">
    <?php
      echo "<br>Seja bem vindo! <br>";
      echo "Trabalho realizado pelas alunas Julia Vertuoso e Letícia Badin Dall Igna.<br>
      Na disciplina de Programação para Web II, no Instituto Federal de Santa Catarina.<br>
      Professor: Jackson<br>
      A ideia foi realizar um sistema para um loja de camisetas, onde o funcionario ou o gerente podem acessar atraves de um login,
      logo depois de informar o login e a senha, poderão ter acesso ao cadastro de clientes, listagem de clientes,
      estoque de camisetas, valores e modelos. <br> <br><a href='login.php?sair=1' class='btn btn-dark' role='button'>Voltar</a>";
?>
    </div>
  </div>
</div>
		

  </body>
</html>