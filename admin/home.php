<?php
    include "app/login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>System of the World - Controle de Cursos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>
    <script type="text/javascript" src="js/parsley.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskmoney.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="js/datatables.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">
            System of the World
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastros</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="home.php?op=cadastro&pg=aluno"><i class="fa fa-child"></i> Aluno</a>
                        <a class="dropdown-item" href="home.php?op=cadastro&pg=professor"><i class="fa fa-male"></i> Professor</a>
                        <a class="dropdown-item" href="home.php?op=cadastro&pg=curso"><i class ="fa fa-graduation-cap"></i> Curso</a>
                        <a class="dropdown-item" href="home.php?op=cadastro&pg=usuario"><i class="fa fa-user"></i> Usuario</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="sair.php"><i class="fa fa-power-off"></i></a>
                </li>
            </ul>
        </div>
        </nav>

        <main class="container tela">
            <?php
                $op = $pg = "";
                //recuperar o op
                if( isset ($_GET["op"])){
                    $op = trim ($_GET["op"]);
                }
                if( isset($_GET["pg"])){
                    $pg = trim ($_GET["pg"]);
                }

                //echo "teste do op e do pg: $op e $pg";
                if (empty ($pg)){
                    $pagina = "dashboard.php";
                }else{
                    $pagina = $op."/".$pg.".php";
                }
                if(file_exists($pagina)){
                    include $pagina;
                }else{
                    include "erro.php";
                }

            ?>
        </main>

        <footer>
            <p>System of the World - Developed with <i class ="fa fa-heart-o"></i> by Giovanni</p>
        </footer>
</body>
</html>