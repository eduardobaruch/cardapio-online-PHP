
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- LINK PARA ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>EVA Lanches</title>
    <link rel="icon" href="imagens/icon.png">

  
</head>

<body background="imagens/hamburgerbg.jpg" style="padding-bottom: 70px;">
    <!--NAVBAR-->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button bg-warning">
        <!--LOGO-->
        <div class="container"><a class="navbar-brand" href="index.html"><img src="imagens/logo.png" alt="logo"
                    width="268" height="62"></a>
            <!--MENU--> 
            <ul class="nav navbar-nav mr-auto justify-content-end">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link active" data-toggle="dropdown" aria-expanded="false" href="#">Cardápio </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="sobre.html">Sobre</a>
                        <a class="dropdown-item" role="presentation" href="sugestoes.html">Sugestões</a>
                </li>
            </ul>
            <!--BOTÕES LOGIN E CADASTRAR-->
            <span class="navbar-text actions"> <a class="login" data-toggle="modal" data-target="#modalLogin"
                    href="#" style="margin: 16px;">Login</a><a class="btn btn-light action-button" data-toggle="modal"
                    data-target="#modalCadastro" role="button" href="#">Cadastrar</a></span>
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
                        <form action="Controller/logar.php" method="POST" name="formLogin">
                            <!-- CPF -->
                            <div class="form-group">
                            <label class="sr-only" for="cpf">cpf</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-hashtag"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="CPF" name="cpf" id="cpf">
                            </div></div>
                            <!-- SENHA -->
                            <label class="sr-only" for="Password">senha</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="fa fa-key"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control" placeholder="Senha" name="senha">
                            </div>
                        
                    

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
                        <form method="POST" action="Controller/cadastrar.php">
                            <label class="sr-only" for="usrname">Username</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" name="nome" class="form-control" placeholder="Nome Completo"
                                    aria-label="Username" aria-describedby="basic-addon1" maxlength="30">
                            </div>

                            <label class="sr-only" for="cpf">cpf</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa fa-hashtag"></i></span>
                                </div>
                                <input type="cpf" name="cpf" class="form-control" placeholder="CPF" aria-label="cpf"
                                    aria-describedby="basic-addon1" maxlength="12">
                            </div>

                            <label class="sr-only" for="email">email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username"
                                    aria-describedby="basic-addon1" maxlength="40">
                            </div>
                            <label class="sr-only" for="Password">Name</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                                </div>
                                <input id="Password" name="senha" type="password" class="form-control" placeholder="Senha"
                                    aria-label="Password" aria-describedby="basic-addon2" maxlength="15">
                            </div>
                       

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

    <!-- CARDÁPIO -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">

                <!-- COMIDAS -->
                <div class="card bg-warning text-white card-body">COMIDAS</div>

                <!-- ITEM 1 COMIDA -->
                <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="mt-1">Cheeseburguer HTML</h5>
                            <h5 class="float-right my-auto text-right">R$8,50</h5>
                            <ul>
                                <li class="small">Pão branco, 180g de carne, queijo especial, molho picante.</li>
                            </ul>
                        </div>
                        <div class="col-md-3 my-auto">
                            <button onclick="alert('Você precisa fazer o login para realizar um pedido.')"  class="btn btn-warning float-right">Eu Quero!</button>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2 COMIDA -->
                <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="mt-1">Cheeseburguer PHP</h5>
                            <h5 class="float-right my-auto text-right">R$9,90</h5>
                            <ul>
                                <li class="small">Pão branco, 180g de carne, queijo especial, molho picante.</li>
                            </ul>
                        </div>
                        <div class="col-md-3 my-auto">
                            <button onclick="alert('Você precisa fazer o login para realizar um pedido.')" type="button" class="btn btn-warning float-right">Eu Quero!</button>
                        </div>
                    </div>
                </div>

                <!-- ITEM 3 COMIDA -->
                <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="mt-1">Cheeseburguer Javascript</h5>
                            <h5 class="float-right my-auto text-right">R$11,00</h5>
                            <ul>
                                <li class="small">Pão branco, 180g de carne, queijo especial, molho picante.</li>
                            </ul>
                        </div>
                        <div class="col-md-3 my-auto">
                            <button onclick="alert('Você precisa fazer o login para realizar um pedido.')" type="button" class="btn btn-warning float-right">Eu Quero!</button>
                        </div>
                    </div>
                </div>




                <!-- BEBIDAS -->
                <div class="card bg-warning text-white mt-2">
                    <div class="card-body">BEBIDAS</div>
                </div>

                <!-- ITEM 1 BEBIDA -->
                <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="mt-1">Coca-Cola</h5>
                            <h5 class="float-right my-auto text-right">R$3,30</h5>
                            <ul>
                                <li class="small">Lata.</li>
                            </ul>
                        </div>
                        <div class="col-md-3 my-auto">
                            <button onclick="alert('Você precisa fazer o login para realizar um pedido.')" type="button" class="btn btn-warning float-right">Eu Quero!</button>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2 BEBIDA -->
                <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="mt-1">Cerveja Skol</h5>
                            <h5 class="float-right my-auto text-right">R$6,90</h5>
                            <ul>
                                <li class="small">Garrafa 600ml.</li>
                            </ul>
                        </div>
                        <div class="col-md-3 my-auto">
                            <button onclick="alert('Você precisa fazer o login para realizar um pedido.')" type="button" class="btn btn-warning float-right">Eu Quero!</button>
                        </div>
                    </div>
                </div>

                <!-- ITEM 3 BEBIDA -->
                <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="mt-1">Água Mineral</h5>
                            <h5 class="float-right my-auto text-right">R$2,80</h5>
                            <ul>
                                <li class="small">Garrafa 500ml.</li>
                            </ul>
                        </div>
                        <div class="col-md-3 my-auto">
                            <button onclick="alert('Você precisa fazer o login para realizar um pedido.')" type="button" class="btn btn-warning float-right">Eu Quero!</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARRINHO HEADER -->
            <div class="col-md-4">
                <div class="card bg-dark text-white card-body">SEU PEDIDO
                    <div class="card-img-overlay"><i class="fas fa-hamburger float-right" style='font-size:24px'></i>
                    </div>
                </div>

                <!-- CARRINHO ITENS -->
                <div class="container" style="background-color: #c9bfbf">
                    <div class="row justify-content-center carrinho-vazio">
                        <p><br><br><br><br>seu carrinho esta vazio <br><br><br><br><br></p>
                    </div>
                </div>

                <!-- CARRINHO TOTAL -->
                <div class="container" style="background-color: #c9bfbf">
                    <H6 class="mb-0 p-2">TOTAL DO PEDIDO <span class="float-right">R$ 0,00</span></H6>
                </div>

                <!-- CARRINHO PAGAMENTO -->
                <div class="container bg-light">
                    <div class="row justify-content-center">
                        <button onclick="alert('Você precisa fazer o login para realizar um pedido.')" class="btn btn-secondary mt-3 mb-3">FAZER PEDIDO</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer fixed-bottom font-small bg-warning mt-1">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 font-weight-bold">Criado por Eduardo, Victor e Acyr. © 2020
            Copyright: EVA Lanches</div>
    </footer>


</body>

</html>