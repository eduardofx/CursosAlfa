<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">
            <img src="imagens/logoMenu.png" alt="Logo do Site" id="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="cadastrosMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastros</a>
                    <div class="dropdown-menu" aria-labelledby="cadastrosMenu">
                        <a class="dropdown-item" href="home.php?op=cadastro&pg=aluno"><i class="fa fa-child"></i> Aluno</a>
                        <a class="dropdown-item" href="home.php?op=cadastro&pg=professor"><i class="fa fa-male"></i> Professor</a>
                        <a class="dropdown-item" href="home.php?op=cadastro&pg=curso"><i class ="fa fa-graduation-cap"></i> Curso</a>
                        <a class="dropdown-item" href="home.php?op=cadastro&pg=usuario"><i class="fa fa-user"></i> Usuario</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="relatoriosMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Relatórios</a>
                    <div class="dropdown-menu" aria-labelledby="relatoriosMenu">
                        <a class="dropdown-item" href="home.php?op=relatorios&pg=aluno"><i class="fa fa-child"></i> Aluno</a>
                    </div>
                </li>
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link" href="sair.php"><i class="fa fa-power-off"></i></a>
                </li>
            </ul>

            
        </div>
        </nav>