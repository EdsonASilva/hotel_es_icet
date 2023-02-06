<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel ES</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel ES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Reservar</a>
        </li>
          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=novo_cliente">Novo</a></li>
            <li><a class="dropdown-item" href="?page=listar_cliente">Listar</a></li>
          </ul>
        </li>
          
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=nova_categoria">Nova</a></li>
            <li><a class="dropdown-item" href="?page=listar_categoria">Listar</a></li>
          </ul>
        </li>
          
      </ul>
    </div>
  </div>
</nav>
      
      
      
<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
            include("config.php");
          switch($_REQUEST["page"]){
              case "novo_cliente":
                  include("novo-cliente.php");
                  break;
              case "listar_cliente":
                  include("listar-cliente.php");
                  break;
              case "salvar_cliente":
                  include("salvar-cliente.php");
                  break;
              case "editar_cliente":
                  include("editar-cliente.php");
                  break;
              case "nova_categoria":
                  include("nova-categoria.php");
                  break;
              case "listar_categoria":
                  include("listar-categoria.php");
                  break;
              case "salvar_categoria":
                  include("salvar-categoria.php");
                  break;
              case "editar_categoria":
                  include("editar-categoria.php");
                  break;
          }
        ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>