<?php 
include "../controller/UsuarioController.php";

   $usuario = new UsuarioController();

  if(!empty($_GET['id'])){
    $usuario->deletar($_GET['id']);
    header("location: UsuarioList.php");
  }
  if(!empty($_POST)){
    $load = $usuario->pesquisar($_POST);

  }else{
    $load = $usuario->carregar();

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
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Guns n' Malha</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="UsuarioList.php">Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Camiseta</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Banda</a></li>
            <li><a class="dropdown-item" href="#">Série</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <div class="container">
    <div class="row">
      <h3>Listagem Usuario</h3>
        <form action="UsuarioList.php" method="post">
          
          <div class="row">
            <div class="col-2">
            <select name="campo" class="form-select">
              <option value="nome">Nome</option>
              <option value="telefone">Telefone</option>
              <option value="cpf">CPF</option>
    </select>
      </div>
      <div class="col-4">
      <input type="text" class="form-control" placeholder="Pesquisar" name="valor"/>
    </div>
      <div class="col-6">
          <button class="btn btn-success" type="submit">
          <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
          <a class="btn btn-primary"href="UsuarioForm.php"><i class="fa-solid fa-plus"></i> Cadastrar</a>
      </div>

          
      </form>
      <table class="table table-striped table-hover">
      <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">CPF</th>
            </tr>
    </thead>  <tbody>

        <?php 
        foreach($load as $item){
          echo"<tr>
                <td scope='row'>$item->id</td>
                <td>$item->nome</td>
                <td>$item->telefone</td>
                <td>$item->cpf</td>
                <td><a href='./UsuarioForm.php?id=$item->id'><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href='./UsuarioList.php?id=$item->id'
                        onclick='return confirm(\"Deseja Excluir?\")'><i class='fa-solid fa-trash'></i></a></td>
              </tr>";
        }
            ?>
              </tbody>
        </table>
      </div>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>