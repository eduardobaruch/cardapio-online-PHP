<?php
session_start();
if ((!isset($_SESSION['id_usuario'])) || ($_SESSION['poder'] < 2)) {
    header("location: ../Controller/sair.php");
    exit;
} else {
}

?>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>EVA Lanches</title>
    <link rel="icon" href="../imagens/icon.png">
</head>

<body background="../imagens/hamburgerbg.jpg" style="padding-bottom: 70px;">


    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button bg-warning">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="../imagens/logo.png" alt="logo" width="268" height="62"></a>
            <ul class="nav navbar-nav mr-auto justify-content-end">
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link active" data-toggle="dropdown" aria-expanded="false" href="#">Cadastrar Produto </a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="consultaProdutos.php">Consultar Produtos</a>
                </li>
            </ul>
            <a class="text-body" href="../Controller/sair.php"><strong>Sair</strong> </a>
    </nav>


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <!-- COMIDAS -->
                <div class="card bg-warning text-white card-body">ÁREA DO GERENTE - EDITAR BEBIDA</div>

                <!-- ITEM 1 COMIDA -->
                <div class="container card bg-light mt-1">
                    <div class="input-group mt-2 mb-3">
                        <div class="input-group">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="" aria-haspopup="true">Bebida</button>

                        </div>

                    </div>
                    <form method="POST" action="../Controller/itemController.php">
                        <div class="form-group"><label for="usrname">Nome da Bebida:</label><input class="form-control" value="<?php echo $_GET['nome'] ?>" type="text" id="nome" name="nome"></div>
                        <div class="form-group"><label for="email">Fornecedor:</label><input class="form-control" value="<?php echo $_GET['fornecedor'] ?>" type="text" id="fornecedor" name="fornecedor" /></div>
                        <div class="input-group">
                            <label for="preco">Preço R$</span>
                                <input type="number" value="<?php echo $_GET['preco'] ?>" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" name="preco" />
                        </div>
                        <input type="hidden" id="custId" name="id" value="<?php echo $_GET['id'] ?>">
                        <input type="hidden" name="acao" value="editarBebida" id="acao">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-4 button">
                                    <button type="submit" class="btn btn-warning btn-block mt-1 mb-3">Editar</button>
                                </div>
                            </div>
                        </div>

                    </form>
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


</body>

</html>