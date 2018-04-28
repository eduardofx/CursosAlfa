<?php
        if(!isset($_SESSION["sistema"]["id"])){
            header("location: ./index.php");
            
        }

        // resgatar os dados do ./cadastro/professor.php
        if(isset ($_POST["nome"]))
            $nome = trim ($_POST["nome"]);

        if(isset ($_POST["cpf"]))
            $cpf = trim ($_POST["cpf"]);
        
        if(isset ($_POST["dataNasc"]))
            $dataNasc = trim ($_POST["dataNasc"]);

        if(isset ($_FILE["foto"]))
            $foto = trim ($_FILE["foto"]);

        if(isset ($_POST["email"]))
            $email = trim ($_POST["email"]);

        if(isset ($_POST["telefone"]))
            $telefone = trim ($_POST["telefone"]);

        if(isset ($_POST["senha"]))
            $senha = trim ($_POST["senha"]);
            $senha = password_hash($senha, PASSWORD_DEFAULT);

        if(isset ($_POST["ativo"])){
            $ativo = $_POST["ativo"];
            $ativo = "Sim";
        }else{
            $ativo = "Nao";
        }

        // fim do resgate

        include "./app/conecta.php";

        $sql = "INSERT INTO aluno (id, nome, foto, cpf, datanascimento, email, senha, celular, ativo) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(1, $nome, PDO::PARAM_STR);
        $consulta->bindParam(2, $foto, PDO::PARAM_STR);
        $consulta->bindParam(3, $cpf, PDO::PARAM_STR);
        $consulta->bindParam(4, $dataNasc);
        $consulta->bindParam(5, $email, PDO::PARAM_STR);
        $consulta->bindParam(6, $senha);
        $consulta->bindParam(7, $telefone, PDO::PARAM_STR);
        $consulta->bindParam(8, $ativo);


        if ($consulta->execute()){
            echo "Aluno cadastrado com sucesso";
        }
        else{
            echo "Erro ao realizar cadastro";  
        }

        

?>