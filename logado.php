<?php
    require_once 'CLASSES/usuarios.php';
    require_once 'logar.php';
    $u = new Usuario;
  

?>


<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }
    else 
    {
        
    }
        
?>


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
        <div class="container"><a class="navbar-brand" href="logado.html"><img src="imagens/logo.png" alt="logo"
                    width="268" height="62"></a>
            <!--MENU--> 
            <ul class="nav navbar-nav mr-auto justify-content-end">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link active" data-toggle="dropdown" aria-expanded="false" href="#">Cardápio </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="sobrelogado.html">Sobre</a>
                        <a class="dropdown-item" role="presentation" href="sugestoeslogado.html">Sugestões</a>
                </li>
            </ul>
            <!--USUARIO-->
            <span class="">Olá, <u><strong><?php echo $_SESSION['nome'] ?></strong> </u> <br>Você possui <?php echo $_SESSION['bonus'] ?> pontos.</span><img class="border rounded-circle img-profile" src="https://cdn.icon-icons.com/icons2/108/PNG/256/females_female_avatar_woman_people_faces_18384.png" width="50"/>
            <a class="text-body" href="sair.php"><strong>Sair</strong> </a>
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
                            <button type="button" class="btn btn-warning float-right">Eu Quero!</button>
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
                            <button type="button" class="btn btn-warning float-right">Eu Quero!</button>
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
                            <button type="button" class="btn btn-warning float-right">Eu Quero!</button>
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
                            <button type="button" class="btn btn-warning float-right">Eu Quero!</button>
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
                            <button type="button" class="btn btn-warning float-right">Eu Quero!</button>
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
                            <button type="button" class="btn btn-warning float-right">Eu Quero!</button>
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
                    <div class="row p-1">
                        <div class="col-md-9">
                            <h7 class="mt-1">1x Cheeseburguer HTML</h7>
                            
                        </div>
                        <div class="col-md-3 my-auto">
                            <p>R$8,50 </p>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-md-9">
                            <h7 class="mt-1">2x Coca-Cola</h7>
                            
                        </div>
                        <div class="col-md-3 my-auto">
                            <p>R$6,60 </p>
                        </div>
                    </div>
                </div>
                
                
                
                

                <!-- CARRINHO TOTAL -->
                <div class="container" style="background-color: #c9bfbf">
                    <H6 class="mb-0 p-2">TOTAL DO PEDIDO <span class="float-right">R$17,00</span></H6>
                </div>

                <!-- CARRINHO PAGAMENTO -->
                <div class="container bg-light">
                    <div class="row justify-content-center">
                        <button type="button" class="btn btn-secondary mt-3 mb-3">FAZER PEDIDO</button>
                        <button type="button" class="btn btn-success mt-3 mb-3 ml-2"><a href="conta.html"><span class="text-white"> VISUALIZAR CONTA</span></a></button>
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