<?php 
include "../controller/EstiloController.php";

   $estilo = new EstiloController();

  if(!empty($_GET['id'])){
    $estilo->deletar($_GET['id']);
    header("location: EstiloList.php");
  }
  if(!empty($_POST)){
    $load = $estilo->pesquisar($_POST);

  }else{
    $load = $estilo->carregar();

  }
    
   //var_dump($load);
  // exit;
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


  <div class="container">
    <div class="row">
      <h4><br>Lista de estilos</h4>
        <form action="EstiloList.php" method="post">
          
          <div class="row">
            <div class="col-2">
            <select name="campo" class="form-select">
              <option value="cor">Cor</option>
              <option value="tecido">Tecido</option>
              <option value="quantidade">Quantidade</option>
    </select>
      </div>
      <div class="col-4">
      <input type="text" class="form-control" placeholder="Pesquisar" name="valor"/>
    </div>
      <div class="col-6">
          <button class="btn btn-outline-success" type="submit">
          <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
          <a class="btn btn-outline-primary" href="EstiloForm.php">
          <i class="fa-solid fa-plus"></i> Cadastrar</a>
      </div>

      
      </form>
      <table class="table table-striped table-hover">
      <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cor</th>
                <th scope="col">Tecido</th>
                <th scope="col">Quantidade</th>
                
            </tr>
    </thead>  <tbody>

        <?php 
        foreach($load as $item){
          echo"<tr>
                <td scope='row'>$item->id</td>
                <td>$item->cor</td>
                <td>$item->tecido</td>
                <td>$item->quantidade</td>
                <td><a href='./EstiloForm.php?id=$item->id'><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href='./EstiloList.php?id=$item->id'
                        onclick='return confirm(\"Deseja Excluir?\")'><i class='fa-solid fa-trash'></i></a></td>
              </tr>";
        }
            ?>
              </tbody>
        </table>
      </div>
      <a href="main.php" class="btn btn-outline-secondary" role="button">Voltar</a>
    </div>
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>