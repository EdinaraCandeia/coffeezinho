<?php

session_start(); 

//limpar o buffer de saída
ob_start();

//Conexão com o banco
include_once "configPDO.php";

//RECEBER OS DADOS DO FORM
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);

    switch ($_REQUEST["acao"]) {
        case 'novo1':

            if(!empty($dados['CadUsuario'])){
                $query_usuario = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
             
                $cad_usuario = $pdo->prepare($query_usuario);
                $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
                $cad_usuario->execute();
             
              // var_dump($pdo->lastInsertId());
                $id_usuario = $pdo->lastInsertId();
             
                $query_cliente = "INSERT INTO cliente (cpf, telefone, logradouro, numero, cidade, estado, cep, usuario_ID) 
                VALUES (:cpf, :telefone, :logradouro, :numero, :cidade, :estado, :cep, :usuario_ID)";
             
                 $cad_cliente = $pdo->prepare($query_cliente);
                 $cad_cliente->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
                 $cad_cliente->bindParam(':telefone', $dados['telefone'], PDO::PARAM_STR);
                 $cad_cliente->bindParam(':logradouro', $dados['logradouro'], PDO::PARAM_STR);
                 $cad_cliente->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
                 $cad_cliente->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
                 $cad_cliente->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
                 $cad_cliente->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
                 $cad_cliente->bindParam(':usuario_ID', $id_usuario, PDO::PARAM_INT);
                 $cad_cliente->execute();
             
             }else{
                print "<script>alert('Ocorreu um erro, não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=login'</script>";
            }
            if($cad_cliente==true){
                print "<script>alert('Novo usuário cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=login'</script>";
            }
            
            
           break; 
           case 'novo2':

            if(!empty($dados['CadUsuarioLoja'])){
                $query_usuario = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
             
                $cad_usuario = $pdo->prepare($query_usuario);
                $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
                $cad_usuario->execute();
             
              // var_dump($pdo->lastInsertId());
                $id_usuario = $pdo->lastInsertId();
             
                $query_loja = "INSERT INTO loja (cnpj, telefone, logradouro, numero, cidade, estado, cep, usuario_ID) 
                VALUES (:cnpj, :telefone, :logradouro, :numero, :cidade, :estado, :cep, :usuario_ID)";
             
                 $cad_loja = $pdo->prepare($query_loja);
                 $cad_loja->bindParam(':cnpj', $dados['cnpj'], PDO::PARAM_STR);
                 $cad_loja->bindParam(':telefone', $dados['telefone'], PDO::PARAM_STR);
                 $cad_loja->bindParam(':logradouro', $dados['logradouro'], PDO::PARAM_STR);
                 $cad_loja->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
                 $cad_loja->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
                 $cad_loja->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
                 $cad_loja->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
                 $cad_loja->bindParam(':usuario_ID', $id_usuario, PDO::PARAM_INT);
                 $cad_loja->execute();
             
             }else{
                print "<script>alert('Ocorreu um erro, não foi possível cadastrar!');</script>";
                print "<script>location.href='login.php'</script>";
            }
            if($cad_loja==true){
                print "<script>alert('Novo usuário cadastrado com sucesso!');</script>";
                print "<script>location.href='login.php'</script>";
            }
            
            
           break; 
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);

            $sql = "UPDATE usuario SET
                        nome='{$nome}',
                        email='{$email},
                        senha='{$senha}'
                    WHERE usuario_ID=".$_REQUEST["usuario_ID"];

            $res = $pdo->query($sql);

            if($res==true){
                print "<script>alert('Usuário editado com sucesso!');</script>";
                print "<script>location.href='login.php'</script>";
            }else{
                print "<script>alert('Ocorreu um erro, não foi possível editar!');</script>";
                print "<script>location.href='login.php'</script>";
            }

            break; 
        case 'excluir':
            $sql = "DELETE FROM usuario WHERE usuario_ID=".$_REQUEST["usuario_ID"];

            $res = $pdo->query($sql);

            if($res==true){
                print "<script>alert('Usuário excluído com sucesso!');</script>";
                print "<script>location.href='login.php'</script>";
            }else{
                print "<script>alert('Ocorreu um erro, não foi possível excluir!');</script>";
                print "<script>location.href='login.php'</script>";
            }

                break; 
     }
?>