<!--NAVBAR-->
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button bg-warning">
        <!--LOGO-->
        <div class="container"><a class="navbar-brand" href="logado.php"><img src="../imagens/logo.png" alt="logo"
                    width="268" height="62"></a>
            <!--MENU--> 
            <ul class="nav navbar-nav mr-auto justify-content-end">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link active" data-toggle="dropdown" aria-expanded="false" href="logado.php">Cardápio </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="sobre.php">Sobre</a>
                        <a class="dropdown-item" role="presentation" href="sugestoes.php">Sugestões</a>
                </li>
            </ul>
            <!--USUARIO-->
            <span class="">Olá, <u><strong><?php echo $_SESSION['nome'] ?></strong> </u> <br>Você possui <?php echo $_SESSION['bonus'] ?> pontos.</span><img class="border rounded-circle img-profile" src="https://cdn.icon-icons.com/icons2/108/PNG/256/females_female_avatar_woman_people_faces_18384.png" width="50"/>
            <a class="text-body" href="../Controller/sair.php"><strong>Sair</strong> </a>
        </div>
        
    </nav>