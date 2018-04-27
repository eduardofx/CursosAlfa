<?php
    session_start();

    //variavel na sessão para controlar as tentativas de acesso

    if(isset($_SESSION["tentativas"])){
        $_SESSION["tentativas"]++;
    }else{
        //se nao existir
        $_SESSION["tentativas"] = 1;
    }

    //se as tentativas forem maior que 5 vc bloqueia
    
    if($_SESSION["tentativas"] > 5000){
        echo "<p>Você tentou efetuar mais de 5000 tentativas. Tente novamente mais tarde!</p>";
        exit;
    }

    //verificar se dados foram postados
    if ($_POST){
        $login = $senha = "";
        //verificar se o login e a senha foram enviados por post
        if (isset ($_POST["login"]))
            $login = trim ($_POST["login"]);
        if (isset ($_POST["senha"]))
            $senha = trim($_POST["senha"]);

        //verificar se está em branco
        if (empty ($login)){
            //mensagem de erro
            echo "<script>alert('Usuário ou Senha incorretos');history.back();</script>";
            exit;
        }elseif(empty($senha)){
            echo "<script>alert('Usuário ou Senha incorretos');history.back();</script>";
        }else{
            //se der certo
            include "app/conecta.php";


            $sql = "select * from usuario where login = ? limit 1";
            $consulta = $pdo->prepare($sql);
            //passar parametro do login
            $consulta->bindParam(1,$login);
            //executar o sql
            $consulta->execute();
            //recuperar os dados do sql
            $dados = $consulta->fetch(PDO::FETCH_OBJ);  
            
            //se trouxe algum resultado
            if (empty ($dados->id)){
                echo "<script>alert('Usuário não encontrado');history.back();</script>";
            }else if($dados->ativo !="Sim"){
                echo "<script>alert('Este usuário não está ativo, seu otario');history.back();</script>";
            }else if (!password_verify($senha, $dados->senha)){
                echo "<script>alert('Senha incorreta');history.back();</script>";
            }else{
                $_SESSION["sistema"] = array("id"=>$dados->id, "login"=>$dados->login, "nome"=>$dados->nome);

                header("Location: home.php");
            }
        }

    }else{
        //mensagem de erro
        header ("Location: index.php");
    }