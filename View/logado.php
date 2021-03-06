<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("location: index.php");
    exit;
} else {
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>EVA Lanches</title>
    <link rel="icon" href="../imagens/icon.png">
</head>

<body background="../imagens/hamburgerbg.jpg" style="padding-bottom: 70px;">

    <?php
    include('template/menuLogado.php');
    ?>

    <!-- CARDÁPIO -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-6">

                <!-- COMIDAS -->
                <div class="card bg-warning text-white card-body mt-1">COMIDAS</div>

                <!-- ITENS COMIDA -->
                <?php
                include('listarComidas.php');
                ?>




                <!-- BEBIDAS -->
                <div class="card bg-warning text-white mt-2">
                    <div class="card-body">BEBIDAS</div>
                </div>

                <!-- ITEM BEBIDA -->
                <?php
                include('listarBebidas.php');
                ?>
            </div>



            <!-- CARRINHO HEADER -->

            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card bg-dark text-white card-body mt-1">SEU PEDIDO
                    <div class="card-img-overlay"><i class="fas fa-hamburger float-right" style='font-size:24px'></i>
                    </div>
                </div>



                <!-- CARRINHO ITENS -->
                <div class="container" style="background-color: #c9bfbf">
                    <?php
                    include('carrinho.php');
                    ?>

                </div>





                <!-- Footer -->
                <footer class="footer fixed-bottom font-small bg-warning mt-1">
                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3 font-weight-bold">Criado por Eduardo, Victor e Acyr. © 2020
                        Copyright: EVA Lanches</div>
                </footer>


</body>

</html>