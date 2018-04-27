<?php
    if(!isset($_SESSION["sistema"]["id"])){
        header("location: ../index.php");
        
    }
?>
<h1>Cadastro de Professor</h1>

<form name="form1" class="" method="post" action="home.php?op=salvar&pg=professor" data-parsley-validate enctype="multipart/form-data">

    <label for="id">ID: </label>
    <input type="text" name="id" class="form-control" readonly disabled>
    <br>

    <label for="nome">Nome do Professor</label>
    <input type="text" name="nome" class="form-control" required data-parsley-required-message="Preencha o nome completo do professor">
    <br>

    <label for="cargo">Cargo: </label>
    <input type="text" name="cargo" required class="form-control" required data-parsley-required-message="Preencha o cargo do professor">
    <br>

    <label for="foto">Selecione uma foto</label>
    <input type="file" name="foto" class="form-control" accept="image/jpeg" required data-parsley-required-message="Coloque uma foto">
    <br>

    <label for="curriculo">Currículo do Professor</label>
    <textarea name="curriculo" class="form-control" rows="5" required data-parsley-required-message="Preencha o currículo"></textarea>
    <br>

    <button type="submit" class="btn btn-success">Gravar/Alterar Cadastro</button>
</form>