<?php
        if(!isset($_SESSION["sistema"]["id"])){
            header("location: ./index.php");
            
        }

        // resgatar os dados do ./cadastro/professor.php
        if(isset ($_POST["nome"]))
            $nome = trim ($_POST["nome"]);

        if(isset ($_POST["cargo"]))
            $cargo = trim ($_POST["cargo"]);

        if(isset ($_FILE["foto"]))
            $foto = trim ($_FILE["foto"]);

        if(isset ($_POST["curriculo"]))
            $curriculo = trim ($_POST["curriculo"]);

        if(isset ($_POST["ativo"])){
            $ativo = $_POST["ativo"];
            $ativo = 1;
        }else{
            $ativo = 0;
        }

        // fim do resgate

        include "./app/conecta.php";

        $sql = "insert into professor (id, nome, foto, cargo, curriculo, ativo) values (NULL, ?, ?, ?, ?, ?)";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(1, $nome);
        $consulta->bindParam(2, $foto);
        $consulta->bindParam(3, $cargo);
        $consulta->bindParam(4, $curriculo);
        $consulta->bindParam(5, $ativo);

        if ($consulta->execute()){
            echo "Professor cadastrado com sucesso";
        }
        else{
            echo "Erro ao realizar cadastro";
        }
        

        
        










?>