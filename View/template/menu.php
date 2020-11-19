<nav class="navbar navbar-light navbar-expand-md navigation-clean-button bg-warning">
    <!--LOGO-->
    <div class="container"><a class="navbar-brand" href="logado.php"><img src="../imagens/logo.png" alt="logo" width="268" height="62"></a>
        <!--MENU-->
        <ul class="nav navbar-nav mr-auto justify-content-end">
            <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link active" data-toggle="dropdown" aria-expanded="false" href="logado.php"><?php
                                                                                                                            $paginaLink = basename($_SERVER['SCRIPT_NAME']);
                                                                                                                            if ($paginaLink == 'index.php') {
                                                                                                                                echo str_replace("index.php", "Cardápio", $paginaLink);
                                                                                                                            } elseif (($paginaLink == 'sobre.php')) {
                                                                                                                                echo str_replace("sobre.php", "Sobre", $paginaLink);
                                                                                                                            } elseif (($paginaLink == 'sugestoes.php')) {
                                                                                                                                echo str_replace("sugestoes.php", "Sugestões", $paginaLink);
                                                                                                                            }
                                                                                                                            ?> </a>
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" role="presentation" href="logado.php">Cardápio</a>
                    <a class="dropdown-item" role="presentation" href="sobre.php">Sobre</a>
                    <a class="dropdown-item" role="presentation" href="sugestoes.php">Sugestões</a>
            </li>
        </ul>
        <!--BOTÕES LOGIN E CADASTRAR-->
        <span class="navbar-text actions"> <a class="login" data-toggle="modal" data-target="#modalLogin" href="#" style="margin: 16px;">Login</a><a class="btn btn-light action-button" data-toggle="modal" data-target="#modalCadastro" role="button" href="#">Cadastrar</a></span>
    </div>
    <!--MODAL DE LOGIN-->
    <div class="modal" id="modalLogin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- MODAL HEADER -->
                <div class="modal-header">
                    <h4 class="modal-title">Informações de Login</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>



                <!-- MODAL BODY -->
                <div class="modal-body">
                    <form action="../Controller/clienteController.php" method="POST" name="formLogin">
                        <!-- CPF -->
                        <div class="form-group">
                            <label class="sr-only" for="cpf">cpf</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-hashtag"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="CPF" name="cpf" id="cpf">
                            </div>
                        </div>
                        <!-- SENHA -->
                        <label class="sr-only" for="Password">senha</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="fa fa-key"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control" placeholder="Senha" name="senha">
                        </div>
                        <input type="hidden" name="acao" value="login" id="acao">



                        <!-- MODAL FOOTER -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DE CADASTRO -->
    <div class="modal" id="modalCadastro">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- MODAL HEADER -->
                <div class="modal-header">
                    <h4 class="modal-title">Informações de Cadastro</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- MODAL BODY -->
                <div class="modal-body">
                    <form method="POST" action="../Controller/clienteController.php">
                        <label class="sr-only" for="usrname">Username</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="nome" class="form-control" placeholder="Nome Completo" aria-label="Username" aria-describedby="basic-addon1" maxlength="30">
                        </div>

                        <label class="sr-only" for="cpf">cpf</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-hashtag"></i></span>
                            </div>
                            <input type="cpf" name="cpf" class="form-control" placeholder="CPF" aria-label="cpf" aria-describedby="basic-addon1" maxlength="12">
                        </div>

                        <label class="sr-only" for="email">email</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" maxlength="40">
                        </div>
                        <label class="sr-only" for="Password">Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                            </div>
                            <input id="Password" name="senha" type="password" class="form-control" placeholder="Senha" aria-label="Password" aria-describedby="basic-addon2" maxlength="15">
                        </div>
                        <input type="hidden" name="acao" value="cadastrar" id="acao">


                        <!-- MODAL FOOTER -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


</nav>