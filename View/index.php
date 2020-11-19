<?php
session_start();
if(isset($_SESSION['contaId'])){
    echo "<script language=javascript>alert( 'Você deve pagar a conta antes de sair!' );</script>";
    echo '<script type="text/javascript">window.location.href = "../view/conta.php";</script>';
    exit;
}

unset($_SESSION['contaId']);
unset($_SESSION['id_usuario']);
    unset($_SESSION['carrinho']);
    unset($_SESSION['pedidoId']); 
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
    <link rel="icon" href="../imagens/icon.png">

  
</head>

<body background="../imagens/hamburgerbg.jpg" style="padding-bottom: 70px;">
    <!--NAVBAR-->
   <?php
include ('template/menu.php');
   ?>

    <!-- CARDÁPIO -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">

                <!-- COMIDAS -->
                <div class="card bg-warning text-white card-body">COMIDAS</div>

                <!-- ITEM 1 COMIDA -->
                <?php
                include ('listarComidas.php');
                ?>





                <!-- BEBIDAS -->
                <div class="card bg-warning text-white mt-2">
                    <div class="card-body">BEBIDAS</div>
                </div>

                <!-- ITEM 1 BEBIDA -->
                <?php
                include ('listarBebidas.php');
                ?>
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
                        <p><br><br><br><br>Faça login para adicionar itens <br><br><br><br><br></p>
                    </div>
                </div>

                <!-- CARRINHO TOTAL -->
                <div class="container" style="background-color: #c9bfbf">
                    <H6 class="mb-0 p-2">TOTAL <span class="float-right">R$ 0,00</span></H6>
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