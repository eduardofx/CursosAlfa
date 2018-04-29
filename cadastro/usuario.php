<?php
    if(!isset($_SESSION["sistema"]["id"])){
        header("location: ../index.php");
        
    }
?>
<h1>Cadastro de Usuário</h1>

<form name="form1" class="" method="post" action="home.php?op=salvar&pg=usuario" data-parsley-validate enctype="multipart/form-data">

    <label for="id">ID: </label>
    <input type="text" name="id" class="form-control" readonly disabled>
    <br>

    <label for="nome">Nome Completo: </label>
    <input type="text" name="nome" class="form-control" required data-parsley-required-message="Preencha o nome completo do usuário">
    <br>

    <label for="email">Email: </label>
    <input type="email" name="email" required class="form-control" required data-parsley-required-message="Preencha o e-mail do usuário">
    <br>

    <label for="loginUsuario">Login: </label>
    <input type="text" name="loginUsuario" class="form-control" required data-parsley-required-message="Coloque um login">
    <br>

    <label for="senhaUsuario">Senha: </label>
    <input type="password" name="senhaUsuario" required class="form-control" required data-parsley-required-message="Preencha a senha">
    <br>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="ativo">
        <label class="form-check-label" for="ativo">O usuário é ativo?</label>
    </div>
    <br>


    <button type="submit" class="btn btn-success">Gravar/Alterar Cadastro</button>
</form>