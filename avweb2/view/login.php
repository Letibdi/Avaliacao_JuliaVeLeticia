<html>
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
include '../Util.php';
if(!empty($_POST)){
    Util::logar($_POST);
}elseif(!empty($_GET['sair'])){
    Util::logoff();
}

?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <div class="container">
  <div class="row align-items-start">
    <div class="col">
     	<form action="login.php" method="post">
			<?php
				if(isset($_GET["msg"])){
					echo "<b style='color:red;'>Login ou senha errado, por favor tente novamente!</b><br>";
				}
			?>
			<label>Login</label><br>
			<input type="text" name="login" placeholder="usuario"><br>
			<label>Senha</label><br>
			<input type="password" name="senha" placeholder="******"><br>
			<input type="submit" value="Logar"/>
		</form>
    </div>
  </div>
</div>
  </body>
</html>