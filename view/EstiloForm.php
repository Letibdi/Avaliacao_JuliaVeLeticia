<?php 
include "../controller/EstiloController.php";
include "../Util.php";
util::verificar();


$estilo = new EstiloController();

  if(!empty($_POST['id'])){
    $estilo->update($_POST);
    header("location: EstiloList.php");

  } elseif(!empty($_POST)) {
    $estilo->salvar($_POST);
    header("location: EstiloList.php");

  }

  if(!empty($_GET['id'])){
    $data = $estilo->buscar($_GET['id']);
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guns n' Malha</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      <ul class="navbar-nav me-au$this->estilo,to mb-2 mb-lg-0">
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

    <div class="container">
      <h4><br>Cadastrar</h4>
        <form action="EstiloForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/><br>
            <div class="col-3">
            <label class="form-label">Cor</label><br>
            <input type="text" class="form-control" name="cor" value="<?php echo !empty($data->cor) ? $data->cor : "" ?>">
        </div>
            <div class="col-3">
            <label class="form-label">Tecido</label><br>
            <input type="text" class="form-control" name="tecido" value="<?php echo !empty($data->tecido) ? $data->tecido : "" ?>">
        </div>
        <div class="col-3">
          <label class="form-label">Quantidade</label><br>
            <input type="text" class="form-control" name="quantidade" value="<?php echo !empty($data->quantidade) ? $data->quantidade : "" ?>">
        </div>
            <br><input type="submit" class="btn btn-outline-success" role="button" value="Salvar"/>
            <a href="EstiloList.php" class="btn btn-outline-primary" role="button">Voltar</a>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
</html>
