<?php 
include "../controller/AcessoriosController.php";
//Util::verificar();

   $acessorios = new AcessoriosController();

  if(!empty($_GET['id'])){
    $acessorios->deletar($_GET['id']);
    header("location: AcessoriosList.php");
  }
  if(!empty($_POST)){
    $load = $acessorios->pesquisar($_POST);

  }else{
    $load = $acessorios->carregar();

  }
   //var_dump($load);
  // exit;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livraria M&M</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Livraria M&M</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Livraria</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">inicio</a>
          </li>
    
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cadastros
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="../view/UsuarioList.php">Usuario</a></li>
              <li><a class="dropdown-item" href="../view/LivrosList.php">Livros</a></li>
              <li><a class="dropdown-item" href="../view/AcessoriosList.php">Acessorios</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
    <h1>Lista de Acessorios</h1>
    <form action="AcessoriosList.php" method="post">
      <select class="form-select" name="campo">
        <option value="nome">Nome</option>
        <option value="tipo">Tipo</option>
        <option value="cor">Cor</option>
        <option value="valor">Valor</option>
       
      </select>
      <input type="text" name="valor" />
 
      <button type="submit" class="btn btn-outline-success" value="Buscar">Buscar</button>
     <a href="AcessoriosForm.php" class="btn btn-outline-primary">Cadastrar</a>
  </form>
  <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Cor</th>
            <th>Valor</th>
            <th></th>
            <th></th>
        </tr>
    <?php 
    foreach($load as $item){
      echo"<tr>
            <td>$item->id</td>
            <td>$item->nome</td>
            <td>$item->tipo</td>
            <td>$item->cor</td>
            <td>$item->valor</td>
            <td><a href='./AcessoriosForm.php?id=$item->id'>Editar</a></td>
            <td><a href='./AcessoriosList.php?id=$item->id'
                    onclick='return confirm(\"Deseja Excluir?\")'
            >Excluir</a></td>
           </tr>";
    }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
	</body>
</html>