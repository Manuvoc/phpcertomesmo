<?php 
include "../controller/AcessoriosController.php";
//Util::verificar();

$acessorios = new AcessoriosController();

  if(!empty($_POST['id'])){
    $acessorios->update($_POST);
    header("location: AcessoriosList.php");

  } elseif(!empty($_POST)) {
    $acessorios->salvar($_POST);
    header("location: AcessoriosList.php");

  }

  if(!empty($_GET['id'])){
    $data = $acessorios->buscar($_GET['id']);
  }
?>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  </head>
  <body>
     <!-- Navigation-->
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
<div class="container">
  <div class="row">
    <h1>Formulário Acessorios</h1>
        <form action="AcessoriosForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/><br>
            <div class="col-2">
            <label  class="form-label">Nome:</label><br>
            <input type="text"   class="form-control" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>"/><br>
</div>
<div class="col-2">
            <label  class="form-label" >Tipo:</label><br>
            <input type="text"  class="form-control"  name="tipo" value="<?php echo !empty($data->tipo) ? $data->tipo : "" ?>"/><br>
</div>
<div class="col-2">
            <label  class="form-label" >Cor:</label><br>
            <input type="text"  class="form-control"  name="cor" value="<?php echo !empty($data->cor) ? $data->cor : "" ?>"/><br>
</div>
<div class="col-2">
            <label  class="form-label" >Valor:</label><br>
            <input type="text"  class="form-control" name="valor" value="<?php echo !empty($data->valor) ? $data->valor : "" ?>"/><br>
</div>
            <button  type="submit"  class="btn btn-success">Salvar</button>
           <a href="AcessoriosList.php" class="btn btn-primary">Voltar</a>
            
        </form>
</div>
 
  </div>
</div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	</body>
</html>