<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Acesso</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-6">
                <form class="form-signin" action="logar.php" method="POST">
                    <div class="card">
                        <div class="card-top">
                            <img class="imglogin" src="img/login1.png" alt="" width="72">
                            <h2 class="title">Coffeezinho</h2>
                            <p>Login</p>
                        </div>
                    <div class="card-group">
                        <label>E-mail</label>
                        <input class="form-control" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="card-group">
                        <label>Senha</label>
                        <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="mt-3 card-group  justify-content-center">
                        <button class="btn" type="submit">Acessar</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </body>

</html>