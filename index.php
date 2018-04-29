<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cursos Online</title>
    <link rel="icon" href="imagens/logoMenu.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/parsley.min.js"></script>
</head>
<body>
    <div id="login">
        <img src="imagens/logo.png" alt="Logo do site">
        <form name="form1" method="post" action="verificar.php" data-parsley-validate>
            <label for="login">Login</label>
            <input type="text" name="login" required class="form-control" data-parsley-required-message="Por favor preencha o Login">
            <br>

            <label for="senha">Senha</label>
            <input type="password" name="senha" required class="form-control" data-parsley-required-message="Por favor preencha a Senha">
            <br>

            <button type="submit" class="btn btn-primary">Efetuar Login</button>
            </form>
    </div>
    
    
</body>
</html>