<?php
session_start();
if ($_SESSION['poder'] < 1) {
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
    <title>EVA Lanches - COZINHA</title>
    <link rel="icon" href="../imagens/icon.png">
</head>

<body background="../imagens/hamburgerbg.jpg" style="padding-bottom: 70px;">
    <script type="text/javascript">
        $(document).ready(function() {
            $('#exemplomodal').modal('show');
        })
    </script>


    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button bg-warning">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="../imagens/logo.png" alt="logo" width="268" height="62"></a>
            <a class="text-body" href="../Controller/sair.php"><strong>Sair</strong> </a>

    </nav>

    <?php
    echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
    ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <!-- COMIDAS -->
                <div class="card bg-warning text-white card-body">ÁREA DA COZINHA - PEDIDOS</div>

                <!-- PEDIDO 1 -->
                <?php
                include('consultarPedidos.php');
                ?>

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