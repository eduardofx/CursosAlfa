<?php
        include "./app/conecta.php";

        if(!isset($_SESSION["sistema"]["id"]))
        {
            header("location: ./index.php");
        }


        $senhaUsuario = password_hash($_POST["senhaUsuario"], PASSWORD_DEFAULT);

        if(isset ($_POST["ativo"]))
        {
            $ativo = "Sim";
        }else{
            $ativo = "Nao";
        }

        $sql = "INSERT INTO usuario (id, nome, email, login, senha, ativo) VALUES (NULL, ?, ?, ?, ?, ?)";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(1,  trim($_POST["nome"]), PDO::PARAM_STR);
        $consulta->bindParam(2,  trim($_POST["email"]), PDO::PARAM_STR);
        $consulta->bindParam(3,  trim($_POST["loginUsuario"]), PDO::PARAM_STR); //special thanks for eduardofx, he get to me PDO::PARAM_STR haha ^^
        $consulta->bindParam(4, trim($senhaUsuario), PDO::PARAM_STR);
        $consulta->bindParam(5, $ativo);


        if ($consulta->execute())
        {
            echo "Usuário cadastrado com sucesso";
        }
        else{
            echo "Erro ao realizar cadastro";   
        }

?>
