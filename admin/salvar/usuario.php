<?php
        if(!isset($_SESSION["sistema"]["id"])){
            header("location: ./index.php");
            
        }

        // resgatar os dados do ./cadastro/professor.php
        if(isset ($_POST["nome"]))
            $nome = trim ($_POST["nome"]);

        if(isset ($_POST["email"]))
            $email = trim ($_POST["email"]);

        if(isset ($_POST["loginUsuario"]))
            $loginUsuario = trim ($_POST["loginUsuario"]);

        if(isset ($_POST["senhaUsuario"])){
            $senhaUsuario = trim ($_POST["senhaUsuario"]);
        }

        $senhaUsuario = password_hash($senhaUsuario, PASSWORD_DEFAULT);

        if(isset ($_POST["ativo"])){
            $ativo = $_POST["ativo"];
            $ativo = "Sim";
        }else{
            $ativo = "Nao";
        }

        // fim do resgate

        include "./app/conecta.php";

        $sql = "INSERT INTO usuario (nome, email, login, senha, ativo) VALUES (?, ?, ?, ?, ?)";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(1, $nome);
        $consulta->bindParam(2, $email);
        $consulta->bindParam(':user', $loginUsuario, PDO::PARAM_STR);//special thanks for Ed.Kawassaki-kun!
        $consulta->bindParam(4, $senhaUsuario);
        $consulta->bindParam(5, $ativo);


        if ($consulta->execute()){
            echo "Usuário cadastrado com sucesso";
        }
        else{
            echo "Erro ao realizar cadastro";
            
        }
        $sql->getMessage();
        exit();
?>