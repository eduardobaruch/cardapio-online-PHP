<!--NAVBAR-->
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button bg-warning">
        <!--LOGO-->
        <div class="container"><a class="navbar-brand" href="logado.php"><img src="../imagens/logo.png" alt="logo"
                    width="268" height="62"></a>
            <!--MENU--> 
            <ul class="nav navbar-nav mr-auto justify-content-end">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link active" data-toggle="dropdown" aria-expanded="false" href="logado.php"><?php
                    $paginaLink = basename($_SERVER['SCRIPT_NAME']); 
                    if ($paginaLink == 'logado.php') {
                        echo str_replace("logado.php", "Cardápio", $paginaLink);
                    }  
                         elseif (($paginaLink == 'sobre.php'))
                         { 
                             echo str_replace("sobre.php", "Sobre", $paginaLink);
                             }
                             elseif (($paginaLink == 'sugestoes.php'))
                             { 
                                 echo str_replace("sugestoes.php", "Sugestões", $paginaLink);
                                 }
                    ?> </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="logado.php">Cardápio</a>
                        <a class="dropdown-item" role="presentation" href="sobre.php">Sobre</a>
                        <a class="dropdown-item" role="presentation" href="sugestoes.php">Sugestões</a>
                </li>
            </ul>
            <!--USUARIO-->
            <span class="">Olá, <u><strong><?php echo $_SESSION['nome'] ?></strong> </u> <br>Você possui <?php echo $_SESSION['bonus'] ?> pontos.</span><img class="border rounded-circle img-profile ml-1 mr-1" src="../imagens/pessoa.png" width="50"/>
            <a class="text-body" href="../Controller/sair.php"><strong>Sair</strong> </a>
        </div>
        
    </nav>