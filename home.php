<?php
    include "app/login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cursos Online - Controle de Cursos</title>
    <link rel="icon" href="imagens/logoMenu.png">
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
    <?php
        include "menu.php";
        
    ?>
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
        <?php
            include "footer.php";
        ?>
</body>
</html>