<?php
    if(!isset($_SESSION["sistema"]["id"])){
        header("location: ../index.php");
        
    }
?>
<h1>Cadastro de Aluno</h1>

<form name="form1" class="" method="post" action="home.php?op=salvar&pg=aluno" data-parsley-validate enctype="multipart/form-data">

    <label for="id">RA: </label>
    <input type="text" name="id" class="form-control" readonly disabled>
    <br>

    <label for="nome">Nome Completo: </label>
    <input type="text" name="nome" class="form-control" required data-parsley-required-message="Preencha o nome completo do aluno">
    <br>

    <label for="cpf">CPF: </label>
    <input type="number" name="cpf" class="form-control" required data-parsley-required-message="Preencha o CPF">

    <label for="dataNasc">Data de Nascimento: </label>
    <input type="date" name="dataNasc" class="form-control" required data-parsley-required-message="Selecione a data de Nascimento">
    <br>

    <label for="foto">Selecione uma foto</label>
    <input type="file" name="foto" class="form-control" accept="image/jpeg,png" required data-parsley-required-message="Coloque uma foto">
    <br>

    <label for="email">Email: </label>
    <input type="email" name="email" required class="form-control" required data-parsley-required-message="Preencha o e-mail do usuário">
    <br>

    <label for="telefone">Número Telefônico: </label>
    <input type="number" name="telefone" class="form-control" required data-parsley-required-message="Coloque o número de celular" placeholder="(DDD) XXXXX-XXXX">
    <br>

    <label for="senha">Senha: </label>
    <input type="password" name="senha" required class="form-control" required data-parsley-required-message="Preencha o cargo do usuário">
    <br>


    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="ativo">
        <label class="form-check-label" for="ativo">O aluno é ativo?</label>
    </div>
    <br>


    <button type="submit" class="btn btn-success">Gravar/Alterar Cadastro</button>
</form>