<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Padauk&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <title>Coffezinho</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <div class="col-lg-6 col-md-6">
          <a class="navbar-brand" href="index.html"><ion-icon id="icone" name="cafe-outline"></ion-icon>&nbsp;&nbsp;Coffeezinho</a>
          </div>
            <div class="row justify-content-center">
              <div class="col-lg-11">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#navbar-nav">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#contato">Contato</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Produtos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" aria-current="page" href="#servicos">Cafés</a></li>
                <li><a class="dropdown-item" aria-current="page" href="#servicos">Sobremesas</a></li>
                <li><a class="dropdown-item" aria-current="page" href="#servicos">Lanches</a></li>
                <li><a class="dropdown-item" aria-current="page" href="#servicos">Sucos</a></li>
                <li><a class="dropdown-item" aria-current="page" href="#servicos">Todos os Produtos</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carrinho.php"><ion-icon class="fs-4" name="cart-outline"></ion-icon></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="usuario.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <ion-icon class="fs-4" name="person-outline"></ion-icon>
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" aria-current="page" href="?page=tipo">Novo Usuário</a></li>
                <li><a class="dropdown-item" aria-current="page" href="usuario.php">Login</a></li>
              <!-- <li><a class="dropdown-item" aria-current="page" href="?page=listar">Listar Usuário</a></li>-->
              </ul>
            </li>
          </ul>
        </div>
      </div>
      </div>
      </div>
    </nav>

    <div class="cointainer">
  <div class="row">
    <div class="col mt-5">
    <?php
    include("config.php");
      switch(@$_REQUEST["page"]){
        case "tipo":
          include("tipo_usuario.php");
        break;
        case "novo1":
          include("novo_cliente.php");
        break;
        case "novo2":
          include("novo_loja.php");
        break;
        case "login":
          include("login.php");
        break;
        case "salvar":
            include("salvar_usuario.php");
        break;
       /* case "listar":
          include("listar_usuario.php");
        break;
        case "editar":
          include("editar_usuario.php");
        break;*/
        default:
          print "<h4>Seja bem-vindo(a)!</h4>";
        }
      ?>
      
<div class="container">

<div class="row">
    <div class="col-lg-4 offset-lg-4">
        <formn action="?page=login" method="POST">
            <div class="mb-3">
            <h1 class="mb-4 mt-4">Login</h1>
                <label>Usuário</label>
                <input type="text" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="mb-3">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </formn>
    </div>
</div>
</div>
    </div>
  </div>
</div>
    <footer>
      <div class="footer">
          <div class="info-cttCenter4">
          <h9> &#169; Edinara Candeia :: 2024</h9>
          </div>
      </div>
    </footer>
   
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>