<?php

class Usuario{

    public int $usuario_ID;
    public string $nome;
    public string $email;
    public string $senha;

    /**
     * método responsável por realizar o login do usuario
     * @param string $email
     * @param string $senha
     * @return bool
     */
    public static function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE email = :email";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $obUsuario = $sql->fetchObject(self::class);
            if(password_verify($senha, $obUsuario->senha)){
                $_SESSION['usuario_ID'] = $obUsuario->usuario_ID;
                return true;
            }
        }

        return false;
    }
}

?>