<?php
        if(!isset($_SESSION["sistema"]["id"])){
            header("location: ./index.php");
            
        }

        // resgatar os dados do ./cadastro/professor.php
        if(isset ($_POST["nome"]))
            $nome = trim ($_POST["nome"]);

        if(isset ($_POST["email"]))
            $email = trim ($_POST["email"]);

        if(isset ($_PSOT["loginUsuario"]))
            $loginUsuario = trim ($_FILE["loginUsuario"]);

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

        $sql = "INSERT INTO `usuario` (`id`, `nome`, `email`, `login`, `senha`, `ativo`) VALUES (NULL, ?, ?, ?, ?, ?)";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(1, $nome);
        $consulta->bindParam(2, $email);
        $consulta->bindParam(3, $loginUsuario);
        $consulta->bindParam(4, $senhaUsuario);
        $consulta->bindParam(5, $ativo);

        if ($consulta->execute()){
            echo "Usuário cadastrado com sucesso";
        }
        else{
            echo "Erro ao realizar cadastro";
        }

?>