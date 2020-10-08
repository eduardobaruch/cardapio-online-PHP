<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- LINK PARA ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>EVA Lanches - COZINHA</title>
    <link rel="icon" href="imagens/icon.png">
</head>

<body background="imagens/hamburgerbg.jpg" style="padding-bottom: 70px;">
    <script type="text/javascript">

        $(document).ready(function () {
            $('#exemplomodal').modal('show');
        })
    </script>


    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button bg-warning">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="imagens/logo.png" alt="logo"
                    width="268" height="62"></a>

    </nav>


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <!-- COMIDAS -->
                <div class="card bg-warning text-white card-body">ÁREA DA COZINHA - PEDIDOS</div>

                <!-- PEDIDO 1 -->
                <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="mt-1"><span>1x -</span> Cheeseburguer HTML</h5>
                            <ul>
                                <li class="small">Pão branco, 180g de carne, queijo especial, molho picante.</li>
                            </ul>
                            <hr>
                            <h5 class="mt-1"><span>2x - </span>Coca-Cola</h5>
                            <ul>
                                <li class="small">Lata.</li>
                            </ul>
                            <hr>

                        </div>
                        <div class="col-md-2 my-auto d-flex flex-column">
                            <h5 class="text-center">Pedido 1</h5>
                            <h5 class="text-center">Mesa 3</h5>
                            <button type="button" class="btn btn-warning float-right">Pronto!</button>
                        </div>
                    </div>
                </div>
                <!-- PEDIDO 2 -->
                <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="mt-1"><span>1x - </span>Cheeseburguer PHP</h5>
                            <ul>
                                <li class="small">Pão branco, 180g de carne, queijo especial, molho picante.</li>
                            </ul>
                            <hr>
                            <h5 class="mt-1"><span>2x - </span>Cerveja Skol</h5>
                            <ul>
                                <li class="small">Garrafa 600ml.</li>
                            </ul>
                            <hr>
                            <h5 class="mt-1"><span>1x - </span>Cheeseburguer HTML</h5>
                            <ul>
                                <li class="small">Pão branco, 180g de carne, queijo especial, molho picante.</li>
                            </ul>
                            <hr>


                        </div>
                        <div class="col-md-2 my-auto d-flex flex-column">
                            <h5 class="text-center">Pedido 2</h5>
                            <h5 class="text-center">Mesa 1</h5>
                            <button type="button" class="btn btn-warning float-right">Pronto!</button>
                        </div>
                    </div>
                </div>
                <!-- PEDIDO 3 -->
                <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="mt-1"><span>1x - </span>Cheeseburguer javascript</h5>
                            <ul>
                                <li class="small">Pão branco, 180g de carne, queijo especial, molho picante.</li>
                            </ul>
                            <hr>
                            <h5 class="mt-1"><span>4x - </span>Água Mineral</h5>
                            <ul>
                                <li class="small">Garrafa 500ml.</li>
                            </ul>
                            <hr>
                            <h5 class="mt-1"><span>5x - </span>Cheeseburguer HTML</h5>
                            <ul>
                                <li class="small">Pão branco, 180g de carne, queijo especial, molho picante.</li>
                            </ul>
                            <hr>


                        </div>
                        <div class="col-md-2 my-auto d-flex flex-column">
                            <h5 class="text-center">Pedido 3</h5>
                            <h5 class="text-center">Mesa 2</h5>
                            <button type="button" class="btn btn-warning float-right">Pronto!</button>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer fixed-bottom font-small bg-warning mt-2">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 font-weight-bold">Criado por Eduardo, Victor e Acyr. © 2020
            Copyright: EVA Lanches</div>
    </footer>

    <!--Botoes de login do GERENTE-->
    <!-- Modal -->
    <div class="modal" id="exemplomodal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Área da Cozinha</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <label class="sr-only" for="usrname">Username</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Login" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>


                        <label class="sr-only" for="Password">Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                            </div>
                            <input id="Password" type="password" class="form-control" placeholder="Senha"
                                aria-label="Password" aria-describedby="basic-addon2">
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>

            </div>
        </div>
    </div>

</body>

</html>